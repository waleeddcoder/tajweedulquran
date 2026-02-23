<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'rating'    => 'integer',
    ];

    /**
     * Scope: active testimonials only.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get a UI-Avatars URL for the student avatar.
     */
    public function getAvatarUrlAttribute(): string
    {
        $name = urlencode($this->student_name ?? 'Student');
        return "https://ui-avatars.com/api/?name={$name}&background=064e3b&color=d4af37&size=128";
    }
}
