<?php

namespace App\Filament\Resources;

use App\Models\Session;
use App\Filament\Resources\SessionsResource\Pages;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;

class SessionsResource extends Resource
{
    protected static ?string $model = Session::class;
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';
    protected static ?string $navigationGroup = 'Настройки';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Сессии';
    protected static ?string $modelLabel = 'Сессии';

    public static function canAccess(): bool
    {
        return auth()->user()?->can('session.view');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('row_number')->label('№')->rowIndex()->sortable(false),
                TextColumn::make('user_agent')->label('Устройство')->sortable()->limit(50),
                TextColumn::make('ip_address')->label('IP адрес')->sortable(),
                TextColumn::make('last_activity')->label('Последняя активность')->sortable()
                    ->formatStateUsing(function ($state) {
                        $lastActivity = Carbon::parse($state);
                        return $lastActivity->gt(now()->subMinute())
                            ? '🟢 Онлайн'
                            : $lastActivity->diffForHumans();
                    }),
            ])
            ->query(fn() => Session::query()->where('user_id', Auth::id()))
            ->defaultSort('last_activity', 'desc')
            ->actions([
                DeleteAction::make()
                    ->label('Удалить')
                    ->icon('heroicon-o-trash')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->visible(fn() => auth()->user()?->can('session.delete'))
                    ->action(function (Session $record) {
                        if ($record->id === session()->getId()) {
                            Auth::logout();
                            session()->invalidate();
                            session()->regenerateToken();
                            redirect('/login');
                        }

                        DB::table('sessions')->where('id', $record->id)->delete();
                        Log::info("Session ID [{$record->id}] удалена.");
                    }),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSessions::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
