<?php

namespace App\Filament\Resources\StartNowRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StartNowRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('id', 'desc')
            ->columns([
                TextColumn::make('email')->searchable()->sortable(),
                TextColumn::make('company_name')->searchable()->sortable(),
                TextColumn::make('contact_person')->searchable()->toggleable(),
                TextColumn::make('country_of_registration')->searchable()->toggleable(),
                TextColumn::make('phone')->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('status')->badge()->sortable(),

                IconColumn::make('agreed_to_terms')->label('Agreed')->boolean()->toggleable(),

                TextColumn::make('created_at')->dateTime()->sortable(),
                TextColumn::make('read_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}