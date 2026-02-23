<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                        TextInput::make('name')
            ->label('Client Name')
            ->nullable(),

        FileUpload::make('logo')
            ->image()
            ->directory('clients')
            ->disk('public')
            ->required(),

        Toggle::make('is_active')
            ->default(true),
                //
            ]);
    }
}
