<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user — skip if already exists
        User::firstOrCreate(
            ['email' => 'admin@tajweedulquran.net'],
            [
                'name'     => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );

        $this->call([
            SettingSeeder::class,
            TestimonialSeeder::class,
            PostSeeder::class,
        ]);
    }
}
