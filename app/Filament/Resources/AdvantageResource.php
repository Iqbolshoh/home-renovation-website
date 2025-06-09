<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantageResource\Pages;
use App\Filament\Resources\AdvantageResource\RelationManagers;
use App\Models\Advantage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvantageResource extends Resource
{
    protected static ?string $model = Advantage::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationGroup = 'Главное';
    protected static ?int $navigationSort = 9;
    protected static ?string $navigationLabel = 'Наши преимущества';
    protected static ?string $modelLabel = 'Преимущество';
    protected static ?string $pluralModelLabel = 'Преимущества';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('advantage.view') ?? false;
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Название')
                    ->required()
                    ->maxLength(255)
                    ->disabled(fn() => !auth()->user()?->can('advantage.edit')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title')->label('Название')->searchable()->sortable()->searchable(),
                Tables\Columns\TextColumn::make('updated_at')->label('Обновлён')->dateTime('d.m.Y H:i')->since()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать')->visible(fn() => auth()->user()?->can('advantage.edit')),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdvantages::route('/'),
            'edit' => Pages\EditAdvantage::route('/{record}/edit'),
        ];
    }
}
