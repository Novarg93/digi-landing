<?php

namespace App\Filament\Resources\LegalPages\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Str;

class LegalPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Grid::make(1)->schema([
                Section::make('Page')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->required()
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(function (?string $state, callable $set, callable $get) {
                                    if (! $get('code') && filled($state)) {
                                        $set('code', Str::slug($state));
                                    }
                                }),

                            TextInput::make('code')
                                ->required()
                                ->maxLength(80)
                                ->helperText('Used in URL: /legal/{code} (e.g. terms, privacy)')
                                ->rule('alpha_dash')
                                ->unique(ignoreRecord: true),
                        ]),
                    ])
                    ->columnSpanFull(),

                Section::make('Content')
                    ->schema([
                        RichEditor::make('content')
                            ->label(false)
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold', 'italic', 'underline', 'strike',
                                'h2', 'h3',
                                'bulletList', 'orderedList',
                                'blockquote', 'link',
                                'undo', 'redo',
                            ]),
                    ])
                    ->columnSpanFull(),

                Section::make('Publishing')
                    ->schema([
                        Grid::make(2)->schema([
                            Toggle::make('is_active')
                                ->label('Active')
                                ->default(true)
                                ->required(),

                            TextInput::make('sort')
                                ->numeric()
                                ->default(100)
                                ->helperText('Lower = higher in list')
                                ->required(),
                        ]),
                    ])
                    ->columnSpanFull(),
            ])->columnSpanFull(),
        ]);
    }
}