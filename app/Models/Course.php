<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active'  => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Returns a web-accessible URL for the course image.
     * Uses asset() so it works regardless of APP_URL config.
     */
    public function getImageUrlAttribute(): string
    {
        if (!empty($this->image)) {
            return asset('storage/' . $this->image);
        }

        return asset('images/logo.png');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
