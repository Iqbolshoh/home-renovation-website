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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Заголовок')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('subtitle')
                    ->label('Подзаголовок')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('text_1')
                    ->label('Текст 1')
                    ->required()
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->disabled(fn() => !auth()->user()?->can('about.edit')),

                    RichEditor::make('text_2')
                    ->label('Текст 2')
                    ->required()
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->disabled(fn() => !auth()->user()?->can('about.edit')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Заголовок')->sortable(),
                Tables\Columns\TextColumn::make('subtitle')->label('Подзаголовок')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Создано')->dateTime('d.m.Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Удалить'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutStudias::route('/'),
            'create' => Pages\CreateAboutStudia::route('/create'),
            'edit' => Pages\EditAboutStudia::route('/{record}/edit'),
        ];
    }
}
