<footer class="bg-emerald-900 text-cream pt-16 pb-8 border-t-4 border-gold-500 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Brand -->
            <div class="space-y-6">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full overflow-hidden bg-white shadow-sm flex items-center justify-center p-1">
                        <img src="{{ asset('images/logo.png') }}" alt="Tajweed Ul Quran Logo" class="w-full h-full object-contain">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-white font-playfair font-bold text-xl leading-none">Tajweed Ul</span>
                        <span class="text-gold-400 font-inter font-medium text-sm leading-none tracking-widest uppercase">Quran</span>
                    </div>
                </a>
                <p class="text-emerald-100 text-sm leading-relaxed">
                    Tajweed Ul Quran provides online Quran classes in Pakistan for kids and adults who want to learn Quran with proper Tajweed.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-emerald-800 flex items-center justify-center text-white hover:bg-gold-500 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-emerald-800 flex items-center justify-center text-white hover:bg-gold-500 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-emerald-800 flex items-center justify-center text-white hover:bg-gold-500 transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-playfair text-xl font-semibold mb-6 text-gold-400 relative inline-block">
                    Quick Links
                    <span class="absolute -bottom-2 left-0 w-1/2 h-0.5 bg-gold-400"></span>
                </h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-emerald-100 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-gold-500"></i> Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-emerald-100 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-gold-500"></i> About Us</a></li>
                    <li><a href="{{ route('courses.index') }}" class="text-emerald-100 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-gold-500"></i> Courses</a></li>
                    <li><a href="{{ route('gallery') }}" class="text-emerald-100 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-gold-500"></i> Gallery</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-emerald-100 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-gold-500"></i> Blog</a></li>
                </ul>
            </div>

            <!-- Programs -->
            <div>
                <h4 class="font-playfair text-xl font-semibold mb-6 text-gold-400 relative inline-block">
                    Our Programs
                    <span class="absolute -bottom-2 left-0 w-1/2 h-0.5 bg-gold-400"></span>
                </h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}#courses" class="text-emerald-100 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-gold-500"></i> Quran Reading (Nazra)</a></li>
                    <li><a href="{{ url('/') }}#courses" class="text-emerald-100 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-gold-500"></i> Tajweed Mastery</a></li>
                    <li><a href="{{ url('/') }}#courses" class="text-emerald-100 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-gold-500"></i> Hifz-ul-Quran</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-playfair text-xl font-semibold mb-6 text-gold-400 relative inline-block">
                    Contact Information
                    <span class="absolute -bottom-2 left-0 w-1/2 h-0.5 bg-gold-400"></span>
                </h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-800 flex items-center justify-center shrink-0">
                            <i class="fab fa-whatsapp text-white"></i>
                        </div>
                        <div class="pt-2 text-emerald-100">
                            @php
                                $whatsapp = \App\Models\Setting::where('key', 'whatsapp_number')->value('value') ?? '923448559422';
                            @endphp
                            +{{ $whatsapp }}
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-800 flex items-center justify-center shrink-0">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div class="pt-2 text-emerald-100">
                            @php
                                $email = \App\Models\Setting::where('key', 'contact_email')->value('value') ?? 'info@tajweedulquran.net';
                            @endphp
                            {{ $email }}
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-emerald-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-emerald-200 text-sm">
            <p>&copy; {{ date('Y') }} Tajweed Ul Quran. All rights reserved.</p>
            <p class="mt-2 md:mt-0">Designed elegantly in Pakistan.</p>
        </div>
    </div>
</footer>
