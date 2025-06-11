<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TelegramBotUserResource\Pages;
use App\Models\TelegramBotUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TelegramBotUserResource extends Resource
{
    protected static ?string $model = TelegramBotUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell-alert';
    protected static ?string $navigationGroup = 'Сообщения';
    protected static ?int $navigationSort = 13;
    protected static ?string $navigationLabel = 'Уведомления';
    protected static ?string $pluralModelLabel = 'Уведомления';
    protected static ?string $modelLabel = 'Уведомления';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('telegram-bot.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('chat_id')
                    ->label('Chat ID')
                    ->required()
                    ->maxLength(20)
                    ->unique(ignoreRecord: true)
                    ->disabled(fn() => !auth()->user()?->can('telegram-bot.edit'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('chat_id')
                    ->label('Chat ID')
                    ->searchable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата подписки')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать')->visible(fn() => auth()->user()?->can('telegram-bot.edit')),
                Tables\Actions\DeleteAction::make()->label('Удалить')->visible(fn() => auth()->user()?->can('telegram-bot.delete')),
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
            'index' => Pages\ListTelegramBotUsers::route('/'),
            'create' => Pages\CreateTelegramBotUser::route('/create'),
            'edit' => Pages\EditTelegramBotUser::route('/{record}/edit'),
        ];
    }
}
