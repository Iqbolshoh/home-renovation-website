<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Spatie\Permission\Models\Role;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Роли и пользователи';
    protected static ?int $navigationSort = 3;
    static ?string $navigationLabel = 'Пользователи';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('user.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        $shouldDisable = fn($record) => auth()->user()?->hasRole('superadmin') ?
            $record && $record->id === auth()->id() :
            $record?->hasRole('superadmin') || auth()->id() === $record?->id || !auth()->user()?->can('user.edit') || self::hasMatchingRoles($record);

        $shouldDisable = $form->getOperation() === 'create' ? false : $shouldDisable;

        return $form->schema([
            TextInput::make('name')
                ->label('Имя')
                ->required()
                ->maxLength(255)
                ->disabled($shouldDisable),

            TextInput::make('email')
                ->label('Электронная почта')
                ->email()
                ->required()
                ->maxLength(255)
                ->unique(User::class, 'email', ignoreRecord: true)
                ->disabled($shouldDisable),

            TextInput::make('password')
                ->label('Пароль')
                ->password()
                ->minLength(8)
                ->maxLength(255)
                ->requiredWith('passwordConfirmation')
                ->dehydrated(fn(?string $state): bool => filled($state))
                ->disabled($shouldDisable),

            TextInput::make('passwordConfirmation')
                ->label('Подтверждение пароля')
                ->password()
                ->minLength(8)
                ->maxLength(255)
                ->requiredWith('password')
                ->same('password')
                ->dehydrated(fn(?string $state): bool => filled($state))
                ->disabled($shouldDisable),

            Select::make('roles')
                ->label('Роли')
                ->relationship('roles', 'name')
                ->preload()
                ->multiple()
                ->searchable()
                ->minItems(1)
                ->options(fn() => Role::where('name', '!=', 'superadmin')->pluck('name', 'id'))
                ->disabled($shouldDisable),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->searchable()->sortable(),
                TextColumn::make('name')->label('Имя')->searchable()->sortable(),
                TextColumn::make('email')->label('Почта')->searchable()->sortable(),
                TextColumn::make('roles.name')->label('Роли')->sortable()->badge(),
                TextColumn::make('created_at')->label('Дата создания')->dateTime()->sortable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('updated_at')->label('Дата обновления')->dateTime()->sortable()->toggleable()->toggledHiddenByDefault(),
            ])
            ->filters([
                SelectFilter::make('roles')
                    ->label('Фильтр по ролям')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать')->visible(
                    fn($record) => auth()->user()?->hasRole('superadmin')
                    ? $record && $record->id !== auth()->id()
                    : $record && !$record->hasRole('superadmin') && auth()->user()?->can('user.edit') && auth()->id() !== $record->id && !self::hasMatchingRoles($record)
                ),

                Tables\Actions\DeleteAction::make()->label('Удалить')->visible(
                    fn($record) => auth()->user()?->hasRole('superadmin')
                    ? $record && $record->id !== auth()->id()
                    : $record && !$record->hasRole('superadmin') && auth()->user()?->can('user.delete') && auth()->id() !== $record->id && !self::hasMatchingRoles($record)
                ),
            ])
            ->bulkActions([]);
    }

    public static function hasMatchingRoles($record): bool
    {
        return $record?->can('user.view') || $record?->can('user.create') || $record?->can('user.edit') || $record?->can('user.delete');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}