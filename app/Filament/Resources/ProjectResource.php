<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Проекты';
    protected static ?int $navigationSort = 13;
    protected static ?string $navigationLabel = 'Проекты';
    protected static ?string $pluralModelLabel = 'Проекты';
    protected static ?string $modelLabel = 'Проект';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('project.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Название проекта')
                ->required()
                ->maxLength(255)
                ->disabled(fn() => !auth()->user()?->can('project.edit')),

            Forms\Components\Textarea::make('apartment_info')
                ->label('Информация о квартире')
                ->required()
                ->disabled(fn() => !auth()->user()?->can('project.edit')),

            Forms\Components\Textarea::make('client_solution')
                ->label('Решение для клиента')
                ->required()
                ->disabled(fn() => !auth()->user()?->can('project.edit')),

            Forms\Components\Textarea::make('text_1')
                ->label('Описание №1')
                ->required()
                ->disabled(fn() => !auth()->user()?->can('project.edit')),

            Forms\Components\Textarea::make('text_2')
                ->label('Описание №2')
                ->required()
                ->disabled(fn() => !auth()->user()?->can('project.edit')),

            Forms\Components\Repeater::make('images')
                ->label('Изображения проекта')
                ->relationship('images')
                ->required()
                ->minItems(3)
                ->maxItems(12)
                ->columns(1)
                ->reorderable(true)
                ->cloneable()
                ->addActionLabel('Добавить изображение')
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->label('Загрузить изображение')
                        ->required()
                        ->image()
                        ->directory('projects-images')
                        ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                        ->openable()
                        ->downloadable()
                        ->previewable()
                        ->imageEditor(),
                ])->disabled(fn() => !auth()->user()?->can('project.edit')),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('title')->label('Название')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('apartment_info')->label('Информация о квартире')->limit(50),
                Tables\Columns\TextColumn::make('client_solution')->label('Решение клиента')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->label('Создан')->dateTime()->sortable()->since(),
                Tables\Columns\TextColumn::make('updated_at')->label('Обновлён')->dateTime()->sortable()->since(),
            ])
            ->filters([
                // Фильтры можно добавить позже
            ])
            ->actions([
                Tables\Actions\EditAction::make()->visible(fn() => auth()->user()?->can('project.edit')),
                Tables\Actions\DeleteAction::make()->visible(fn() => auth()->user()?->can('project.delete')),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
