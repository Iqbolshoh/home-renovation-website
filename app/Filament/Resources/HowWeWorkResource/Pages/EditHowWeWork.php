<?php

namespace App\Filament\Resources\HowWeWorkResource\Pages;

use App\Filament\Resources\HowWeWorkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHowWeWork extends EditRecord
{
    protected static string $resource = HowWeWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
