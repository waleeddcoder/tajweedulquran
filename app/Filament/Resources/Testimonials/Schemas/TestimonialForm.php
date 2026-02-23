<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('student_name')
                    ->label('Student Name')
                    ->required()
                    ->maxLength(150),
                Select::make('rating')
                    ->label('Rating')
                    ->options([
                        1 => '⭐ 1 Star',
                        2 => '⭐⭐ 2 Stars',
                        3 => '⭐⭐⭐ 3 Stars',
                        4 => '⭐⭐⭐⭐ 4 Stars',
                        5 => '⭐⭐⭐⭐⭐ 5 Stars',
                    ])
                    ->required()
                    ->default(5),
                TextInput::make('course_taken')
                    ->label('Course Taken')
                    ->nullable()
                    ->maxLength(255),
                TextInput::make('date_completed')
                    ->label('Completion Date')
                    ->nullable()
                    ->placeholder('e.g. January 2025'),
                Textarea::make('quote')
                    ->label('Testimonial Quote')
                    ->required()
                    ->rows(4)
                    ->maxLength(1000)
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Show on Frontend')
                    ->default(true),
            ]);
    }
}
