<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = [
            // Branding
            'site_name'           => 'Tajweed Ul Quran',
            'logo'                => null, // set via admin

            // Hero
            'hero_heading'        => 'Learn Quran with Tajweed Online in Pakistan',
            'hero_subheading'     => 'Traditional Teaching, Modern Approach — structured lessons for all ages, from anywhere in the world.',
            'hero_image'          => null, // set via admin

            // Contact & WhatsApp
            'whatsapp_number'     => '923448559422',
            'whatsapp_message'    => 'Assalamualaikum, I want to learn about your Quran courses. Please share more details.',
            'contact_email'       => 'info@tajweedulquran.net',

            // Social Media
            'facebook_url'        => '',
            'instagram_url'       => '',
            'youtube_url'         => '',
            'twitter_url'         => '',

            // SEO
            'meta_title'          => 'Tajweed Ul Quran | Learn Quran Online in Pakistan',
            'meta_description'    => 'Learn Quran with Tajweed online in Pakistan. Certified male and female tutors, flexible timings, and one-on-one sessions for kids and adults worldwide.',
        ];

        foreach ($defaults as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
