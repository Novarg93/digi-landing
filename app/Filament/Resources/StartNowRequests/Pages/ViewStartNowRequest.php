<?php

namespace App\Filament\Resources\StartNowRequests\Pages;

use App\Filament\Resources\StartNowRequests\StartNowRequestResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStartNowRequest extends ViewRecord
{
    protected static string $resource = StartNowRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
