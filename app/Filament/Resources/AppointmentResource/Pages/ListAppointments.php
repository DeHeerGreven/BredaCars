<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Log;

class ListAppointments extends ListRecords
{
    protected static string $resource = AppointmentResource::class;


    protected function getHeaderActions(): array
    {
        return [
           
        ];
    }
}
