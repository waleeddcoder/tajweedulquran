<x-layouts.app>
    <x-slot:title>{{ $course->seo_title ?? $course->title }} | Tajweed Ul Quran</x-slot>
    <x-slot:description>{{ Str::limit(strip_tags($course->description ?? ''), 160) }}</x-slot>

    {{-- Course Hero --}}
    <div class="pt-12 pb-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-emerald-950 z-0">
            <img src="{{ $course->image_url }}" alt="{{ $course->title }}" loading="lazy"
                 class="w-full h-full object-cover opacity-25 mix-blend-overlay">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-emerald-900/80 to-transparent z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl" data-aos="fade-up">
                @if($course->level)
                <div class="inline-block px-4 py-1.5 rounded-full bg-gold-500 text-emerald-950 text-sm font-bold tracking-wider uppercase mb-6">{{ $course->level }}</div>
                @endif
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-playfair font-bold text-white mb-5 leading-tight">{{ $course->title }}</h1>
                @if($course->description)
                <p class="text-emerald-100 text-xl font-light leading-relaxed opacity-90 mb-8">{{ Str::limit($course->description, 180) }}</p>
                @endif
                <div class="flex flex-wrap gap-4 text-white text-sm font-medium">
                    @if($course->duration)
                    <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/20">
                        <i class="far fa-clock text-gold-400"></i> {{ $course->duration }}
                    </div>
                    @endif
                    @if($course->pricing)
                    <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/20">
                        <i class="fas fa-tag text-gold-400"></i> {{ $course->pricing }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Course Body --}}
    <section class="py-20 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-14">

                {{-- Main Content --}}
                <div class="lg:w-2/3" data-aos="fade-right">
                    <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-emerald-900/5 mb-10">
                        <h2 class="text-3xl font-playfair font-bold text-emerald-900 mb-6">Course Description</h2>
                        <div class="prose prose-emerald lg:prose-lg max-w-none text-gray-600 leading-relaxed">
                            {!! nl2br(e($course->description ?? 'No description available.')) !!}
                        </div>
                    </div>

                    <h3 class="text-2xl font-playfair font-bold text-emerald-900 mb-5 px-1">What You Will Learn</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach(['Proper articulation points (Makharij) of Arabic letters', 'Rules of Nun Sakinah, Meem Sakinah & Madd', 'Fluency and confidence in continuous recitation', 'Correct application of Tajweed in daily Salah'] as $point)
                        <div class="bg-white p-5 rounded-2xl shadow-sm border border-emerald-900/5 flex gap-4 items-start">
                            <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5"><i class="fas fa-check text-xs"></i></div>
                            <p class="text-gray-700 text-sm">{{ $point }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Enrollment Sidebar --}}
                <div class="lg:w-1/3" data-aos="fade-left" data-aos-delay="150">
                    <div class="sticky top-28 bg-white rounded-3xl p-8 shadow-xl border border-gold-500/20">
                        <h3 class="text-2xl font-playfair font-bold text-gray-800 mb-6 text-center">Ready to Start?</h3>
                        <ul class="space-y-4 mb-8 text-gray-600 text-sm">
                            <li class="flex items-center gap-3"><i class="fas fa-user-graduate text-gold-500 w-5 text-center"></i> 1-on-1 Live Sessions</li>
                            <li class="flex items-center gap-3"><i class="fas fa-calendar-alt text-gold-500 w-5 text-center"></i> Flexible Scheduling</li>
                            <li class="flex items-center gap-3"><i class="fas fa-certificate text-gold-500 w-5 text-center"></i> Completion Certificate</li>
                            <li class="flex items-center gap-3"><i class="fas fa-laptop-house text-gold-500 w-5 text-center"></i> Learn from Anywhere</li>
                        </ul>
                        <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '923448559422' }}?text={{ urlencode('I want to enroll in: ' . $course->title) }}"
                           target="_blank"
                           class="w-full btn-primary justify-center text-base py-4 flex">
                            <i class="fab fa-whatsapp text-xl"></i> Enroll via WhatsApp
                        </a>
                        <p class="text-center text-xs text-gray-400 mt-3">3-day free trial available</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
