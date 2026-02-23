<nav class="fixed top-0 left-0 w-full z-50 transition-all duration-300 glass-header py-3" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-full overflow-hidden bg-white shadow-sm flex items-center justify-center p-1 transition-transform group-hover:scale-105">
                    <img src="{{ asset('images/logo.png') }}" alt="Tajweed Ul Quran Logo" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col">
                    <span class="text-emerald-900 font-playfair font-bold text-xl leading-none">Tajweed Ul</span>
                    <span class="text-gold-500 font-inter font-medium text-sm leading-none tracking-widest uppercase">Quran</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('courses.index') }}" class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}">Courses</a>
                <a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                <a href="{{ route('blog.index') }}" class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a>
                <a href="{{ route('home') }}#testimonials" class="nav-link">Reviews</a>
                
                @php
                    $whatsapp = \App\Models\Setting::where('key', 'whatsapp_number')->value('value') ?? '923448559422';
                @endphp
                <a href="https://wa.me/{{ $whatsapp }}" target="_blank" class="btn-primary">
                    <i class="fab fa-whatsapp text-lg"></i>
                    <span>Free Trial</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="text-emerald-900 hover:text-gold-500 focus:outline-none" id="mobile-menu-btn">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden bg-white border-t border-gray-100 absolute w-full shadow-lg" id="mobile-menu">
        <div class="px-4 pt-2 pb-6 space-y-2 flex flex-col">
            <a href="{{ route('home') }}" class="block px-3 py-2 text-emerald-900 font-medium hover:bg-cream rounded-md">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-emerald-900 font-medium hover:bg-cream rounded-md">About</a>
            <a href="{{ route('courses.index') }}" class="block px-3 py-2 text-emerald-900 font-medium hover:bg-cream rounded-md">Courses</a>
            <a href="{{ route('gallery') }}" class="block px-3 py-2 text-emerald-900 font-medium hover:bg-cream rounded-md">Gallery</a>
            <a href="{{ route('blog.index') }}" class="block px-3 py-2 text-emerald-900 font-medium hover:bg-cream rounded-md">Blog</a>
            <a href="{{ route('home') }}#testimonials" class="block px-3 py-2 text-emerald-900 font-medium hover:bg-cream rounded-md">Reviews</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close menu on click outside or links
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });
    });
</script>
