<?php

namespace App\Filament\Resources\AboutStudiaResource\Pages;

use App\Filament\Resources\AboutStudiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutStudias extends ListRecords
{
    protected static string $resource = AboutStudiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
