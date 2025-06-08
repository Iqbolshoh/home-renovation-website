<?php

namespace App\Filament\Resources\HowWeWorkResource\Pages;

use App\Filament\Resources\HowWeWorkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHowWeWorks extends ListRecords
{
    protected static string $resource = HowWeWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
