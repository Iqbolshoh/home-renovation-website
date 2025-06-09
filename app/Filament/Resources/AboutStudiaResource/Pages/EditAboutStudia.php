<?php

namespace App\Filament\Resources\AboutStudiaResource\Pages;

use App\Filament\Resources\AboutStudiaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutStudia extends EditRecord
{
    protected static string $resource = AboutStudiaResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
