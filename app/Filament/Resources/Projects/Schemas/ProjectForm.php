<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            TextInput::make('category'),

            Textarea::make('short_description'),

            Textarea::make('description')
                ->columnSpanFull(),

            FileUpload::make('featured_image')
                ->image()
                ->directory('projects')
                ->disk('public')
                ->visibility('public')
                ->required(),

            DatePicker::make('project_date'),

            Toggle::make('is_upcoming')
                ->label('Upcoming Project'),

            Toggle::make('is_featured')
                ->label('Show on Homepage'),

                Repeater::make('images')
    ->relationship('images')
    ->schema([
        FileUpload::make('image')
            ->image()
            ->directory('projects/gallery')
            ->disk('public')
            ->required(),
    ])
    ->columns(1)
    ->label('Project Gallery'),
                //
            ]);
            
    }
    
}
