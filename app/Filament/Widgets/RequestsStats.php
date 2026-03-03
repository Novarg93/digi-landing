<?php

namespace App\Filament\Widgets;

use App\Models\ContactRequest;
use App\Models\StartNowRequest;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RequestsStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $startNowTotal = StartNowRequest::query()->count();
        $startNowNew = StartNowRequest::query()->whereNull('read_at')->count();

        $contactTotal = ContactRequest::query()->count();
        $contactNew = ContactRequest::query()->whereNull('read_at')->count();

        return [
            Stat::make('Start Now Requests', $startNowTotal)
                ->description("New: {$startNowNew}")
                ->descriptionIcon('heroicon-o-bolt'),

            Stat::make('Contact Requests', $contactTotal)
                ->description("New: {$contactNew}")
                ->descriptionIcon('heroicon-o-envelope'),
        ];
    }
}