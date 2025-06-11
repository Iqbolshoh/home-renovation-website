<?php

namespace App\Filament\Resources\TelegramBotUserResource\Pages;

use App\Filament\Resources\TelegramBotUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTelegramBotUser extends CreateRecord
{
    protected static string $resource = TelegramBotUserResource::class;
}
