<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-20">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tajweed Ul Quran | Learn Quran Online in Pakistan' }}</title>
    <meta name="description" content="{{ $description ?? 'Learn Quran with Tajweed online in Pakistan. Tajweed Ul Quran offers online Quran classes for kids and adults with proper Tajweed.' }}">
    
    <meta property="og:title" content="{{ $title ?? 'Tajweed Ul Quran | Learn Quran Online in Pakistan' }}">
    <meta property="og:description" content="{{ $description ?? 'Learn Quran with Tajweed online in Pakistan. Tajweed Ul Quran offers online Quran classes for kids and adults with proper Tajweed.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ isset($ogImage) ? \Illuminate\Support\Facades\Storage::disk('public')->url($ogImage) : asset('images/logo.png') }}">

    @yield('meta')

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome & AOS & Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased bg-cream text-gray-800 font-inter selection:bg-emerald-700 selection:text-white">

    <x-navbar />

    <main class="pt-[72px]">
        {{ $slot }}
    </main>

    <x-footer />
    <x-whatsapp-cta />

    @livewireScripts
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 50,
            });
        });
    </script>
</body>
</html>
