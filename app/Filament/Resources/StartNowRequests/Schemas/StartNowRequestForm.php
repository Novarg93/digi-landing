<?php

namespace App\Filament\Resources\StartNowRequests\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StartNowRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Request')
                ->columns(2)
                ->schema([
                    TextInput::make('contact_person')->required()->maxLength(255),
                    TextInput::make('company_name')->required()->maxLength(255),
                    TextInput::make('email')->email()->required()->maxLength(255),
                    TextInput::make('country_of_registration')->required()->maxLength(255),
                    TextInput::make('phone')->maxLength(50),
                    TextInput::make('status')->required()->default('new'),
                    Toggle::make('agreed_to_terms')->label('Agreed to terms')->required(),
                ]),

            Section::make('About')
                ->schema([
                    Textarea::make('about')->rows(10)->required()->maxLength(5000)->columnSpanFull(),
                ]),
        ]);
    }
}