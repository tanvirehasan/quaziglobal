<?php

namespace App\Filament\Resources\Headers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class HeaderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
        TextInput::make('title')
            ->required(),

        TextInput::make('subtitle'),

        FileUpload::make('background_image')
            ->image()
            ->directory('headers')
            ->disk('public')
            ->required(),

        Toggle::make('is_active')
            ->default(true),

                //
            ]);
    }
}
