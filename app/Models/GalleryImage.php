<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active'  => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getImageUrlAttribute(): string
    {
        if (!empty($this->image_path)) {
            return asset('storage/' . $this->image_path);
        }

        return asset('images/logo.png');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
