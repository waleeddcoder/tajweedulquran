<?php

use Illuminate\Support\Facades\Route;
use App\Models\Setting;
use App\Models\Course;
use App\Models\Testimonial;
use App\Models\GalleryImage;
use App\Models\Post;

/**
 * Helper to get all settings as a key-value array.
 * Cached for 10 minutes to avoid N+1 queries on every page.
 */
function siteSettings(): array
{
    return cache()->remember('site_settings', 600, fn () => Setting::pluck('value', 'key')->toArray());
}

// ──────────────────────────────────────────────
// HOME
// ──────────────────────────────────────────────
Route::get('/', function () {
    $courses      = Course::active()->orderBy('sort_order')->take(3)->get();
    $testimonials = Testimonial::active()->latest()->take(4)->get();
    $posts        = Post::published()->latest()->take(3)->get();
    $settings     = siteSettings();

    return view('welcome', compact('courses', 'testimonials', 'posts', 'settings'));
})->name('home');

// ──────────────────────────────────────────────
// ABOUT
// ──────────────────────────────────────────────
Route::get('/about', function () {
    $settings = siteSettings();
    return view('about', compact('settings'));
})->name('about');

// ──────────────────────────────────────────────
// COURSES
// ──────────────────────────────────────────────
Route::get('/courses', function () {
    $settings = siteSettings();
    $courses  = Course::active()->orderBy('sort_order')->get();
    return view('courses.index', compact('settings', 'courses'));
})->name('courses.index');

Route::get('/courses/{course}', function (Course $course) {
    abort_unless($course->is_active, 404);
    $settings = siteSettings();
    return view('courses.show', compact('settings', 'course'));
})->name('courses.show');

// ──────────────────────────────────────────────
// GALLERY
// ──────────────────────────────────────────────
Route::get('/gallery', function () {
    $settings = siteSettings();
    $gallery  = GalleryImage::active()->orderBy('sort_order')->get();
    return view('gallery', compact('settings', 'gallery'));
})->name('gallery');

// ──────────────────────────────────────────────
// BLOG
// ──────────────────────────────────────────────
Route::get('/blog', function () {
    $settings = siteSettings();
    $posts    = Post::published()->latest()->paginate(9);
    return view('blog.index', compact('settings', 'posts'));
})->name('blog.index');

Route::get('/blog/{post:slug}', function (Post $post) {
    abort_unless($post->is_published, 404);
    $settings = siteSettings();
    return view('blog.show', compact('settings', 'post'));
})->name('blog.show');

// ──────────────────────────────────────────────
// SITEMAP
// ──────────────────────────────────────────────
Route::get('/sitemap.xml', function () {
    $courses = Course::active()->get();
    $posts   = Post::published()->get();
    return response()
        ->view('sitemap', compact('courses', 'posts'))
        ->header('Content-Type', 'text/xml');
});
