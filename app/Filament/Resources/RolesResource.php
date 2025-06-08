<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RolesResource\Pages;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesResource extends Resource
{
    protected static ?string $model = Role::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Роли и пользователи';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Роли';
    protected static ?string $modelLabel = 'Роли';

    public static function canAccess(): bool
    {
        return auth()->user()?->hasRole('superadmin') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->label('Название роли')
                ->regex('/^[a-zA-Z0-9-]+$/')
                ->helperText('Допустимые символы: A–Z, a–z, 0–9 и тире (-).')
                ->disabled(fn(?Role $record) => $record?->name === 'superadmin'),

            Select::make('permissions')
                ->relationship('permissions', 'name')
                ->label('Разрешения')
                ->multiple()
                ->searchable()
                ->preload()
                ->required(fn(?Role $record) => $record?->name !== 'superadmin')
                ->minItems(fn(?Role $record) => $record?->name !== 'superadmin' ? 1 : 0)
                ->hidden(fn(?Role $record) => $record?->name === 'superadmin')
                ->options(static::getGroupedPermissions()),
        ]);
    }

    protected static function getGroupedPermissions(): array
    {
        return Cache::remember('grouped_permissions', now()->addHour(), fn() => Permission::all()
            ->groupBy(fn(Permission $perm) => explode('.', $perm->name)[0])
            ->mapWithKeys(fn($group, string $key) => [
                ucfirst($key) => $group->pluck('name', 'id')->toArray(),
            ])->toArray());
    }

    public static function syncPermissions(Role $role, array $permissionIds): void
    {
        $validIds = Permission::whereIn('id', $permissionIds)->pluck('id')->toArray();
        $permissionNames = Permission::whereIn('id', $validIds)->pluck('name')->toArray();
        $role->syncPermissions($permissionNames);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn(Builder $query) => $query->with('permissions'))
            ->columns([
                TextColumn::make('id')->sortable()->searchable()->label('ID'),
                TextColumn::make('name')->sortable()->searchable()->label('Название роли'),
                TextColumn::make('permissions.name')->label('Разрешения')->badge(),
                TextColumn::make('users_count')->label('Пользователи')->counts('users')->sortable()->badge()->color('success')->formatStateUsing(fn(?int $state) => $state ?? 0)->extraAttributes(['class' => 'hover:bg-success-100 transition-colors']),
                TextColumn::make('created_at')->dateTime()->sortable()->label('Создано')->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('updated_at')->dateTime()->sortable()->label('Обновлено')->toggleable()->toggledHiddenByDefault(),
            ])
            ->filters([
                SelectFilter::make('permissions')
                    ->label('Разрешения')
                    ->options(fn() => Permission::pluck('name', 'id')->toArray())
                    ->multiple()
                    ->preload()
                    ->query(function (Builder $query, array $data) {
                        if (empty($data['values'])) {
                            return;
                        }
                        $query->whereHas('permissions', fn(Builder $subQuery) => $subQuery->whereIn('id', $data['values']));
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->visible(fn(Role $record) => $record->name !== 'superadmin'),
                Tables\Actions\DeleteAction::make()->visible(fn(Role $record) => $record->name !== 'superadmin'),
            ])
            ->bulkActions([])
            ->defaultSort('id', 'asc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRoles::route('/create'),
            'edit' => Pages\EditRoles::route('/{record}/edit'),
        ];
    }
}
