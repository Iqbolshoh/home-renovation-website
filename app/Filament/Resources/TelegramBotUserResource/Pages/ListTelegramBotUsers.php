<?php

namespace App\Filament\Resources\TelegramBotUserResource\Pages;

use App\Filament\Resources\TelegramBotUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTelegramBotUsers extends ListRecords
{
    protected static string $resource = TelegramBotUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(fn() => auth()->user()?->can('telegram-bot.create')),
        ];
    }
}
