<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->nullable()
                    ->rows(4)
                    ->columnSpanFull(),
                TextInput::make('duration')
                    ->nullable()
                    ->placeholder('e.g. 3 months, 12 weeks'),
                TextInput::make('pricing')
                    ->nullable()
                    ->placeholder('e.g. PKR 2,000/month'),
                Select::make('level')
                    ->options([
                        'Beginner'     => 'Beginner',
                        'Intermediate' => 'Intermediate',
                        'Advanced'     => 'Advanced',
                        'All Levels'   => 'All Levels',
                    ])
                    ->required()
                    ->default('All Levels'),
                FileUpload::make('image')
                    ->label('Course Image')
                    ->image()
                    ->disk('public')
                    ->directory('courses')
                    ->imagePreviewHeight('150')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->maxSize(2048)
                    ->nullable()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Active / Visible on Frontend')
                    ->default(true),
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
