<?php

namespace App\Filament\Resources\CarLogResource\Pages;

use App\Filament\Resources\CarLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarLogs extends ListRecords
{
    protected static string $resource = CarLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
