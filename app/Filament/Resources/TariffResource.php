<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TariffResource\Pages;
use App\Models\Tariff;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TariffResource extends Resource
{
    protected static ?string $model = Tariff::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationGroup = 'Главное';
    protected static ?int $navigationSort = 9;
    protected static ?string $navigationLabel = 'Тарифы';
    protected static ?string $pluralModelLabel = 'Тарифы';
    protected static ?string $modelLabel = 'Тариф';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('tariff.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Название тарифа')
                    ->required()
                    ->maxLength(255)
                    ->disabled(fn() => !auth()->user()?->can('tariff.edit')),

                Forms\Components\Textarea::make('subtitle')
                    ->label('Подзаголовок')
                    ->rows(2)
                    ->maxLength(255)
                    ->required()
                    ->disabled(fn() => !auth()->user()?->can('tariff.edit')),

                Forms\Components\TextInput::make('price')
                    ->label('Цена')
                    ->required()
                    ->maxLength(255)
                    ->disabled(fn() => !auth()->user()?->can('tariff.edit')),

                RichEditor::make('description')
                    ->label('Описание')
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->required()
                    ->disabled(fn() => !auth()->user()?->can('tariff.edit')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title')->label('Название')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subtitle')->label('Подзаголовок')->limit(30)->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price')->label('Цена')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('updated_at')->label('Обновлён')->dateTime()->sortable()->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать')->visible(fn() => auth()->user()?->can('tariff.edit')),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTariffs::route('/'),
            'edit' => Pages\EditTariff::route('/{record}/edit'),
        ];
    }
}
