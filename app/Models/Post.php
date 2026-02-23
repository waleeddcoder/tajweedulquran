<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function getFeaturedImageUrlAttribute(): string
    {
        if (!empty($this->featured_image)) {
            return Storage::disk('public')->url($this->featured_image);
        }

        return asset('images/logo.png');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
