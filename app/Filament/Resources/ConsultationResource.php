<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsultationResource\Pages;
use App\Models\Consultation;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Actions\BulkAction;
use Illuminate\Support\Collection;

class ConsultationResource extends Resource
{
    protected static ?string $model = Consultation::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left';
    protected static ?string $navigationGroup = 'Сообщения';
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationLabel = 'Консультация';
    protected static ?string $pluralModelLabel = 'Консультации';
    protected static ?string $modelLabel = 'Консультация';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->label('Имя'),
                Forms\Components\TextInput::make('email')->email()->required()->label('Email'),
                Forms\Components\TextInput::make('phone')->required()->label('Телефон'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Имя')->sortable()->searchable(),
                TextColumn::make('email')->label('Email')->sortable()->searchable(),
                TextColumn::make('phone')->label('Телефон')->sortable(),
                BadgeColumn::make('status')
                    ->label('Статус')
                    ->sortable()
                    ->colors([
                        'success' => 'read',
                        'danger' => 'unread',
                    ])
                    ->formatStateUsing(fn($state) => match ($state) {
                        'read' => 'Прочитано',
                        'unread' => 'Не прочитано',
                        default => $state,
                    }),
                TextColumn::make('created_at')->label('Дата')->dateTime('d.m.Y H:i')->since(),
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
                    ->action(function (Consultation $record) {
                        $record->status = 'read';
                        $record->save();
                    })
                    ->visible(fn(Consultation $record) => $record->status !== 'read'),
                Tables\Actions\ViewAction::make()->label('Просмотреть'),
                Tables\Actions\DeleteAction::make()->label('Удалить'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Удалить выбранное'),

                BulkAction::make('mark_read_bulk')
                    ->label('Читать')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->action(function (Collection $records) {
                        $records->each(fn($record) => $record->update(['status' => 'read']));
                    }),
            ]);
    }

    public static function getNavigationBadge(): ?string
    {
        $count = Consultation::where('status', 'unread')->count();
        return $count > 0 ? (string) $count : null;
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListConsultations::route('/'),
        ];
    }
}
