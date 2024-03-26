<?php

namespace App\Filament\Resources\CarLogResource\Pages;

use App\Filament\Resources\CarLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarLog extends EditRecord
{
    protected static string $resource = CarLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
