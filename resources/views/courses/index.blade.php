<x-layouts.app>
    <x-slot:title>Our Courses | Tajweed Ul Quran</x-slot>

    <div class="pt-12 pb-16 bg-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 z-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-gold-500/30 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-playfair font-bold text-white mb-3" data-aos="fade-up">Sacred Learning Paths</h1>
            <p class="text-emerald-200 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Explore our comprehensive range of Quranic courses designed for all ages and proficiency levels.</p>
        </div>
    </div>

    <section class="py-20 bg-cream min-h-[60vh]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($courses as $course)
                <div class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-emerald-900/5 hover:-translate-y-2 flex flex-col"
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <a href="{{ route('courses.show', $course->id) }}" class="block relative h-60 overflow-hidden">
                        <div class="absolute inset-0 bg-emerald-900/20 group-hover:bg-transparent transition-colors z-10"></div>
                        <img src="{{ $course->image_url }}" alt="{{ $course->title }}" loading="lazy"
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        @if($course->level)
                        <div class="absolute top-4 right-4 z-20 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-emerald-900 shadow-sm">{{ $course->level }}</div>
                        @endif
                    </a>
                    <div class="p-7 flex flex-col grow">
                        <a href="{{ route('courses.show', $course->id) }}">
                            <h2 class="text-xl font-playfair font-bold text-gray-800 mb-2 group-hover:text-emerald-900 transition-colors">{{ $course->title }}</h2>
                        </a>
                        @if($course->description)
                        <p class="text-gray-500 mb-5 line-clamp-3 text-sm leading-relaxed">{{ $course->description }}</p>
                        @endif
                        <div class="mt-auto space-y-2 pt-4 border-t border-gray-100">
                            @if($course->duration)
                            <div class="flex items-center gap-2 text-gray-500 text-sm"><i class="far fa-clock text-gold-500 w-4"></i>{{ $course->duration }}</div>
                            @endif
                            @if($course->pricing)
                            <div class="flex items-center gap-2 text-gray-500 text-sm"><i class="fas fa-tag text-emerald-600 w-4"></i>{{ $course->pricing }}</div>
                            @endif
                        </div>
                        <a href="{{ route('courses.show', $course->id) }}"
                           class="mt-6 block w-full text-center py-3 px-4 rounded-xl border-2 border-emerald-900 text-emerald-900 font-semibold hover:bg-emerald-900 hover:text-white transition-colors duration-300">
                            View Details
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-20">
                    <div class="inline-block p-6 rounded-full bg-emerald-50 text-emerald-200 mb-4"><i class="fas fa-book-open text-4xl"></i></div>
                    <h3 class="text-xl font-bold text-gray-700 mb-1">No Courses Yet</h3>
                    <p class="text-gray-400 text-sm">We are currently updating our course catalog. Check back soon.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-16 bg-white border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="zoom-in">
            <h2 class="text-3xl font-playfair font-bold text-emerald-900 mb-4">Not sure which course is right for you?</h2>
            <p class="text-gray-600 mb-8 text-lg">Talk to our academic advisors. We will assess your level and recommend the perfect learning path.</p>
            <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '923448559422' }}?text={{ urlencode('I need guidance on choosing a course.') }}"
               target="_blank" class="btn-primary inline-flex">
                <i class="fab fa-whatsapp text-lg"></i> Get Free Consultation
            </a>
        </div>
    </section>
</x-layouts.app>
