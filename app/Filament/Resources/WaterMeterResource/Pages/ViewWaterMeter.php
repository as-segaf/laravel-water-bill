<?php

namespace App\Filament\Resources\WaterMeterResource\Pages;

use App\Filament\Resources\WaterMeterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWaterMeter extends ViewRecord
{
    protected static string $resource = WaterMeterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
