<?php

namespace App\Filament\Resources\ContactRequests\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactRequestsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Request')
                ->columns(2)
                ->schema([
                    TextEntry::make('name')->label('Full Name')->placeholder('—'),
                    TextEntry::make('email')->label('Email')->copyable(),
                    TextEntry::make('company')->label('Company')->placeholder('—'),
                    TextEntry::make('status')->label('Status'),
                    TextEntry::make('created_at')->label('Received')->dateTime(),
                    TextEntry::make('read_at')->label('Read at')->dateTime()->placeholder('—'),
                ]),

            Section::make('Message')
                ->schema([
                    TextEntry::make('message')
                        ->label(false)
                        ->prose()
                        ->columnSpanFull(),
                ]),

            Section::make('Meta')
                ->columns(2)
                ->collapsed()
                ->schema([
                    TextEntry::make('ip')->label('IP')->placeholder('—'),
                    TextEntry::make('user_agent')->label('User Agent')->placeholder('—')->columnSpanFull(),
                ]),
        ]);
    }
}