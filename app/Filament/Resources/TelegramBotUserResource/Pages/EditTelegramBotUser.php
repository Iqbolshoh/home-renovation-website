<?php

namespace App\Filament\Resources\TelegramBotUserResource\Pages;

use App\Filament\Resources\TelegramBotUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTelegramBotUser extends EditRecord
{
    protected static string $resource = TelegramBotUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->visible(fn() => auth()->user()?->can('telegram-bot.delete'))
        ];
    }
}
