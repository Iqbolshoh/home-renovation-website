<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutStudiaResource\Pages;
use App\Models\AboutStudia;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutStudiaResource extends Resource
{
    protected static ?string $model = AboutStudia::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationGroup = 'Главное';
    protected static ?int $navigationSort = 7;
    protected static ?string $navigationLabel = 'О студии';
    protected static ?string $modelLabel = 'О студии';
    protected static ?string $pluralModelLabel = 'О студии';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('about-studia.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Заголовок')
                    ->required()
                    ->maxLength(255)
                    ->disabled(fn() => !auth()->user()?->can('about-studia.edit')),

                Forms\Components\TextInput::make('subtitle')
                    ->label('Подзаголовок')
                    ->required()
                    ->maxLength(255)
                    ->disabled(fn() => !auth()->user()?->can('about-studia.edit')),

                RichEditor::make('text_1')
                    ->label('Текст 1')
                    ->required()
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->disabled(fn() => !auth()->user()?->can('about-studia.edit')),

                RichEditor::make('text_2')
                    ->label('Текст 2')
                    ->required()
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->disabled(fn() => !auth()->user()?->can('about-studia.edit')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Заголовок'),
                Tables\Columns\TextColumn::make('subtitle')->label('Подзаголовок'),
                Tables\Columns\TextColumn::make('updated_at')->label('Обновлён')->dateTime('d.m.Y H:i')->since(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать')->visible(fn() => auth()->user()?->can('about-studia.edit')),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutStudias::route('/'),
            'edit' => Pages\EditAboutStudia::route('/{record}/edit'),
        ];
    }
}
