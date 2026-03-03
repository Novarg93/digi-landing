<?php

namespace App\Filament\Resources\StartNowRequests;

use App\Filament\Resources\StartNowRequests\Pages\CreateStartNowRequest;
use App\Filament\Resources\StartNowRequests\Pages\EditStartNowRequest;
use App\Filament\Resources\StartNowRequests\Pages\ListStartNowRequests;
use App\Filament\Resources\StartNowRequests\Pages\ViewStartNowRequest;
use App\Filament\Resources\StartNowRequests\Schemas\StartNowRequestForm;
use App\Filament\Resources\StartNowRequests\Schemas\StartNowRequestInfolist;
use App\Filament\Resources\StartNowRequests\Tables\StartNowRequestsTable;
use App\Models\StartNowRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class StartNowRequestResource extends Resource
{
    protected static ?string $model = StartNowRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInboxArrowDown;

    protected static string|UnitEnum|null $navigationGroup = 'Support';

    protected static ?string $navigationLabel = 'Start Now Requests';

    protected static ?string $recordTitleAttribute = 'email';

    public static function form(Schema $schema): Schema
    {
        return StartNowRequestForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StartNowRequestInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StartNowRequestsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStartNowRequests::route('/'),
            'create' => CreateStartNowRequest::route('/create'),
            'view' => ViewStartNowRequest::route('/{record}'),
            'edit' => EditStartNowRequest::route('/{record}/edit'),
        ];
    }
}