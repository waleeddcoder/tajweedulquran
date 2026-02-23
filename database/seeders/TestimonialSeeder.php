<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'student_name'   => 'Fatima Khan',
                'rating'         => 5,
                'quote'          => 'Alhamdulillah, I started from zero and now I can recite the Quran with correct Tajweed. The teacher is very patient and knowledgeable. Highly recommend Tajweed Ul Quran to everyone!',
                'course_taken'   => 'Tajweed Mastery Course',
                'date_completed' => 'December 2024',
                'is_active'      => true,
            ],
            [
                'student_name'   => 'Ahmed Ali',
                'rating'         => 5,
                'quote'          => 'The one-on-one sessions made a huge difference. My recitation improved dramatically in just 3 months. My teacher corrected every mistake with such care and dedication. JazakAllah Khair!',
                'course_taken'   => 'Quran Reading (Nazra)',
                'date_completed' => 'November 2024',
                'is_active'      => true,
            ],
            [
                'student_name'   => 'Zainab Malik',
                'rating'         => 5,
                'quote'          => 'My 8-year-old daughter is learning Hifz here and the progress is MashAllah incredible. The female tutor is so supportive and makes the lessons fun for kids. Best decision we ever made.',
                'course_taken'   => 'Hifz-ul-Quran Program',
                'date_completed' => 'January 2025',
                'is_active'      => true,
            ],
            [
                'student_name'   => 'Muhammad Usman',
                'rating'         => 5,
                'quote'          => 'I live in the UK and was struggling to find a qualified teacher nearby. Tajweed Ul Quran solved that problem completely. The flexible timings work perfectly around my schedule. 100% recommended!',
                'course_taken'   => 'Tajweed Mastery Course',
                'date_completed' => 'October 2024',
                'is_active'      => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                ['student_name' => $testimonial['student_name']],
                $testimonial
            );
        }
    }
}
