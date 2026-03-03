<?php

namespace App\Filament\Resources\StartNowRequests\Pages;

use App\Filament\Resources\StartNowRequests\StartNowRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStartNowRequests extends ListRecords
{
    protected static string $resource = StartNowRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
