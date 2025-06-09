<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationGroup = 'Сообщения';
    protected static ?int $navigationSort = 12;
    protected static ?string $navigationLabel = 'Контакты';
    protected static ?string $pluralModelLabel = 'Контакты';
    protected static ?string $modelLabel = 'Контакт';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('contact.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('value')
                    ->label('Значение')
                    ->nullable()
                    ->maxLength(255)
                    ->required()
                    ->disabled(fn() => !auth()->user()?->can('contact.edit')),

                Forms\Components\Toggle::make('is_active')
                    ->label('Активен')
                    ->default(false)
                    ->inline()
                    ->disabled(fn() => !auth()->user()?->can('contact.edit')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('name')->label('Название')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('value')->label('Значение')->limit(30)->sortable()->searchable(),
                Tables\Columns\BooleanColumn::make('is_active')->label('Активен')->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->label('Обновлён')->dateTime()->sortable()->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->visible(fn() => auth()->user()?->can('contact.edit')),
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
            'index' => Pages\ListContacts::route('/'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
