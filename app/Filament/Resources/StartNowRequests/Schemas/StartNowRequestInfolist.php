<?php

namespace App\Filament\Resources\StartNowRequests\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StartNowRequestInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Request')
                ->columns(2)
                ->schema([
                    TextEntry::make('contact_person')->label('Contact person'),
                    TextEntry::make('company_name')->label('Company name'),
                    TextEntry::make('email')->label('Email')->copyable(),
                    TextEntry::make('country_of_registration')->label('Country of registration'),
                    TextEntry::make('phone')->label('Phone')->placeholder('—'),
                    TextEntry::make('status')->label('Status'),
                    TextEntry::make('created_at')->label('Received')->dateTime(),
                    TextEntry::make('read_at')->label('Read at')->dateTime()->placeholder('—'),
                ]),

            Section::make('About')
                ->schema([
                    TextEntry::make('about')
                        ->label(false)
                        ->prose()
                        ->columnSpanFull(),
                ]),

            Section::make('Meta')
                ->collapsed()
                ->columns(2)
                ->schema([
                    TextEntry::make('ip')->label('IP')->placeholder('—'),
                    TextEntry::make('user_agent')
                        ->label('User Agent')
                        ->placeholder('—')
                        ->columnSpanFull(),
                ]),
        ]);
    }
}