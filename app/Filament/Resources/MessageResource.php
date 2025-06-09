<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Models\Message;
use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Collection;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope-open';
    protected static ?string $navigationGroup = 'Сообщения';
    protected static ?int $navigationSort = 11;
    protected static ?string $navigationLabel = 'Сообщения';
    protected static ?string $pluralModelLabel = 'Сообщения';
    protected static ?string $modelLabel = 'Сообщение';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('message.view') ?? false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Имя')
                    ->maxLength(255),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Email')
                    ->maxLength(255),

                Forms\Components\TextInput::make('number')
                    ->required()
                    ->label('Телефон')
                    ->maxLength(255),

                Forms\Components\Textarea::make('message')
                    ->label('Сообщение')
                    ->rows(5)
                    ->required()
                    ->maxLength(65535),

                Forms\Components\Select::make('status')
                    ->label('Статус')
                    ->options([
                        'read' => 'Прочитано',
                        'unread' => 'Не прочитано',
                    ])
                    ->default('unread')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable()->searchable(),
                TextColumn::make('name')->label('Имя')->sortable()->searchable(),
                TextColumn::make('email')->label('Email')->sortable()->searchable(),
                TextColumn::make('number')->label('Телефон')->sortable()->searchable(),
                BadgeColumn::make('status')->label('Статус')->sortable()->colors(['success' => 'read', 'danger' => 'unread',])
                    ->formatStateUsing(fn($state) => match ($state) {
                        'read' => 'Прочитано',
                        'unread' => 'Не прочитано',
                        default => $state,
                    }),
                TextColumn::make('created_at')->label('Дата')->dateTime('d.m.Y H:i')->since()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Статус')
                    ->options([
                        'read' => 'Прочитано',
                        'unread' => 'Не прочитано',
                    ]),
            ])
            ->actions([
                Tables\Actions\Action::make('mark_read')
                    ->label('Читать')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->action(function (Message $record) {
                        $record->update(['status' => 'read']);
                    })
                    ->visible(fn(Message $record) => $record->status !== 'read' && auth()->user()?->can('message.read')),

                Tables\Actions\ViewAction::make()->label('Просмотреть')->visible(fn() => auth()->user()?->can('message.edit')),
                Tables\Actions\DeleteAction::make()->label('Удалить')->visible(fn() => auth()->user()?->can('message.delete')),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Удалить выбранные')->visible(fn() => auth()->user()?->can('message.delete')),
                BulkAction::make('mark_read_bulk')
                    ->label('Читать')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->action(function (Collection $records) {
                        $records->each(function (Message $record) {
                            $record->update(['status' => 'read']);
                        });
                    })->visible(fn() => auth()->user()?->can('message.read')),
            ]);
    }

    public static function getNavigationBadge(): ?string
    {
        $count = Message::where('status', 'unread')->count();
        return $count > 0 ? (string) $count : null;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'),
        ];
    }
}
