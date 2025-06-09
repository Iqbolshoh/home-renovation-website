<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HowWeWorkResource\Pages;
use App\Models\HowWeWork;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HowWeWorkResource extends Resource
{
    protected static ?string $model = HowWeWork::class;
    protected static ?string $navigationIcon = 'heroicon-o-check-circle';
    protected static ?string $navigationGroup = 'Главное';
    protected static ?int $navigationSort = 8;
    protected static ?string $navigationLabel = 'Как мы работаем';
    protected static ?string $modelLabel = 'Этап работы';
    protected static ?string $pluralModelLabel = 'Этапы работы';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('we-work.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Заголовок')
                ->required()
                ->maxLength(255)
                ->disabled(fn() => !auth()->user()?->can('we-work.edit')),

            Forms\Components\Textarea::make('value')
                ->label('Описание')
                ->required()
                ->rows(5)
                ->disabled(fn() => !auth()->user()?->can('we-work.edit'))
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Заголовок')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('value')->label('Описание')->sortable()->searchable()->limit(50),
            Tables\Columns\TextColumn::make('updated_at')->label('Обновлён')->sortable()->dateTime('d.m.Y H:i')->since(),
        ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать')->visible(fn() => auth()->user()?->can('we-work.edit')),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHowWeWorks::route('/'),
            'edit' => Pages\EditHowWeWork::route('/{record}/edit'),
        ];
    }
}
