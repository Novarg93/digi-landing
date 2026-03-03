<?php

namespace App\Filament\Resources\StartNowRequests\Pages;

use App\Filament\Resources\StartNowRequests\StartNowRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStartNowRequest extends EditRecord
{
    protected static string $resource = StartNowRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
