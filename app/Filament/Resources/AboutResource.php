<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'Главное';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationLabel = 'Обо мне';
    protected static ?string $modelLabel = 'Обо мне';
    protected static ?string $pluralModelLabel = 'Обо мне';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('about.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('bio')
                    ->label('Биография')
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->required()
                    ->disabled(fn() => !auth()->user()?->can('about.edit')),

                FileUpload::make('image')
                    ->label('Изображение')
                    ->required()
                    ->image()
                    ->imageEditor()
                    ->directory('about')
                    ->imageEditorMode(2)
                    ->openable()
                    ->downloadable()
                    ->previewable()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                    ->disabled(fn() => !auth()->user()?->can('about.edit')),
            ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Изображение')->rounded(),
                Tables\Columns\TextColumn::make('bio')->label('Биография')->limit(80),
                Tables\Columns\TextColumn::make('updated_at')->label('Обновлён')->dateTime('d.m.Y H:i')->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать')->visible(fn() => auth()->user()?->can('about.edit')),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbouts::route('/'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
