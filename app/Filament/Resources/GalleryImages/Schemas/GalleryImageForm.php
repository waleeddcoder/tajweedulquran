<?php

namespace App\Filament\Resources\GalleryImages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image_path')
                    ->label('Gallery Image')
                    ->image()
                    ->disk('public')
                    ->directory('gallery')
                    ->imagePreviewHeight('200')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/gif'])
                    ->maxSize(4096)
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->label('Caption (optional)')
                    ->nullable()
                    ->maxLength(255),
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->label('Active / Visible on Frontend')
                    ->default(true),
            ]);
    }
}
