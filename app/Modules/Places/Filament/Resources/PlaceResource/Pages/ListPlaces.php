<?php

namespace App\Modules\Places\Filament\Resources\PlaceResource\Pages;

use App\Modules\Places\Filament\Resources\PlaceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlaces extends ListRecords
{
    protected static string $resource = PlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}