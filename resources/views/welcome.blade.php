<x-layouts.app>
    <x-slot:title>Tajweed Ul Quran | {{ $settings['hero_heading'] ?? 'Learn Quran Online in Pakistan' }}</x-slot>

    {{-- Hero Section --}}
    <section id="home" class="relative min-h-[90vh] flex items-center pt-28 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 to-emerald-950 z-0"></div>
        <div class="absolute inset-0 opacity-5 mix-blend-overlay z-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-gold-500/30 to-transparent"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                {{-- Text Content --}}
                <div class="lg:w-1/2 text-center lg:text-left" data-aos="fade-up" data-aos-duration="900">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-gold-400 text-sm font-medium mb-8 shadow-lg">
                        <i class="fas fa-star text-xs"></i>
                        <span>Trusted by 5,000+ Students Worldwide</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-playfair font-bold text-white leading-tight mb-6">
                        {{ $settings['hero_heading'] ?? 'Learn Quran with Tajweed Online in Pakistan' }}
                    </h1>

                    <p class="text-lg md:text-xl text-emerald-50 mb-10 font-light leading-relaxed max-w-2xl mx-auto lg:mx-0 opacity-90">
                        {{ $settings['hero_subheading'] ?? 'Traditional Teaching, Modern Approach — structured lessons for all ages.' }}
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '923448559422' }}?text={{ urlencode($settings['whatsapp_message'] ?? 'Assalamualaikum') }}" target="_blank"
                           class="w-full sm:w-auto bg-gold-500 hover:bg-gold-400 text-emerald-900 font-bold px-8 py-4 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 flex items-center justify-center gap-3">
                            <i class="fab fa-whatsapp text-xl"></i> Start Free Trial
                        </a>
                        <a href="{{ route('courses.index') }}"
                           class="w-full sm:w-auto bg-white/10 hover:bg-white/20 text-white border border-white/30 font-medium px-8 py-4 rounded-2xl transition-all duration-300 hover:-translate-y-1 flex items-center justify-center gap-2">
                            Explore Courses
                        </a>
                    </div>
                </div>

                {{-- Hero Image --}}
                <div class="lg:w-1/2" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="100">
                    <div class="relative w-full aspect-square max-w-md mx-auto">
                        <div class="absolute inset-0 bg-gold-500/20 rounded-full blur-3xl"></div>
                        <div class="relative w-full h-full rounded-full border border-white/10 p-3 bg-white/5 backdrop-blur-sm shadow-2xl">
                            <img src="{{ asset('images/hifz-course.jpeg') }}" alt="Learn Quran Online" loading="lazy"
                                 class="w-full h-full object-cover rounded-full border-4 border-white/10">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Wave divider --}}
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
            <svg class="relative block w-[calc(100%+2px)] h-[70px]" viewBox="0 0 1200 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,120.2,192.27,101.4Z" class="fill-cream"/>
            </svg>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative" data-aos="fade-right">
                    <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-2xl relative">
                        <img src="{{ asset('images/quran-reading-course.jpeg') }}" alt="About Us" loading="lazy" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-2xl shadow-xl flex items-center gap-4 hidden lg:flex">
                        <div class="w-16 h-16 bg-gold-500 rounded-full flex items-center justify-center text-white text-2xl font-bold">10+</div>
                        <div>
                            <p class="font-bold text-gray-800">Years of</p>
                            <p class="text-emerald-900">Excellence</p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2 space-y-7" data-aos="fade-left" data-aos-delay="150">
                    <div>
                        <span class="text-gold-500 font-semibold tracking-wider uppercase text-sm">About Our Academy</span>
                        <h2 class="text-4xl lg:text-5xl font-playfair font-bold text-emerald-900 mt-2 mb-5">Where Tradition Meets Technology</h2>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            At Tajweed Ul Quran, we bridge centuries-old Islamic teaching traditions with modern educational technology. Our certified male and female tutors provide one-on-one attention to ensure mastery in recitation.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-5">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 bg-emerald-50 text-emerald-700 rounded-xl flex items-center justify-center text-xl mb-4"><i class="fas fa-chalkboard-teacher"></i></div>
                            <h4 class="font-bold text-gray-800 text-lg mb-1">Expert Tutors</h4>
                            <p class="text-gray-500 text-sm">Certified Hafiz and Qaris with years of teaching experience.</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 bg-gold-50 text-gold-600 rounded-xl flex items-center justify-center text-xl mb-4"><i class="fas fa-clock"></i></div>
                            <h4 class="font-bold text-gray-800 text-lg mb-1">Flexible Timings</h4>
                            <p class="text-gray-500 text-sm">Schedule classes around your lifestyle and timezone.</p>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn-primary inline-flex">
                        Learn More About Us <i class="fas fa-arrow-right text-sm ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Courses Section --}}
    <section id="courses" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-gold-500 font-semibold tracking-wider uppercase text-sm">Our Programs</span>
                <h2 class="text-4xl lg:text-5xl font-playfair font-bold text-emerald-900 mt-2 mb-4">Sacred Learning Paths</h2>
                <p class="text-gray-600 text-lg">Structured, comprehensive courses for students of all levels and ages.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($courses as $course)
                <div class="group bg-cream rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-emerald-900/5 hover:-translate-y-2 flex flex-col"
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <a href="{{ route('courses.show', $course->id) }}" class="block relative h-60 overflow-hidden">
                        <div class="absolute inset-0 bg-emerald-900/20 group-hover:bg-transparent transition-colors z-10"></div>
                        <img src="{{ $course->image_url }}" alt="{{ $course->title }}" loading="lazy"
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        @if($course->level)
                        <div class="absolute top-4 right-4 z-20 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-emerald-900 shadow-sm">
                            {{ $course->level }}
                        </div>
                        @endif
                    </a>
                    <div class="p-7 flex flex-col grow">
                        <a href="{{ route('courses.show', $course->id) }}">
                            <h3 class="text-xl font-playfair font-bold text-gray-800 mb-2 group-hover:text-emerald-900 transition-colors">{{ $course->title }}</h3>
                        </a>
                        @if($course->description)
                        <p class="text-gray-500 mb-5 line-clamp-2 text-sm leading-relaxed">{{ $course->description }}</p>
                        @endif
                        <div class="mt-auto space-y-2 pt-4 border-t border-gray-200">
                            @if($course->duration)
                            <div class="flex items-center gap-2 text-gray-500 text-sm"><i class="far fa-clock text-gold-500 w-4"></i>{{ $course->duration }}</div>
                            @endif
                            @if($course->pricing)
                            <div class="flex items-center gap-2 text-gray-500 text-sm"><i class="fas fa-tag text-emerald-600 w-4"></i>{{ $course->pricing }}</div>
                            @endif
                        </div>
                        <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '923448559422' }}?text={{ urlencode('I am interested in the ' . $course->title . ' course.') }}"
                           target="_blank"
                           class="mt-6 block w-full text-center py-3 px-4 rounded-xl bg-emerald-50 text-emerald-900 font-semibold hover:bg-emerald-900 hover:text-white transition-colors duration-300">
                            Enroll Now
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-20">
                    <div class="inline-block p-6 rounded-full bg-emerald-50 text-emerald-200 mb-4"><i class="fas fa-book-open text-4xl"></i></div>
                    <h3 class="text-xl font-bold text-gray-700 mb-1">Courses Coming Soon</h3>
                    <p class="text-gray-400 text-sm">We are preparing a rich collection of courses for you.</p>
                </div>
                @endforelse
            </div>

            @if($courses->isNotEmpty())
            <div class="text-center mt-12">
                <a href="{{ route('courses.index') }}" class="btn-primary inline-flex">
                    View All Courses <i class="fas fa-arrow-right text-sm ml-1"></i>
                </a>
            </div>
            @endif
        </div>
    </section>

    {{-- Testimonials Section --}}
    @if($testimonials->isNotEmpty())
    <section id="testimonials" class="py-24 bg-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 z-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-gold-500/40 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-gold-400 font-semibold tracking-wider uppercase text-sm">Student Voices</span>
                <h2 class="text-4xl lg:text-5xl font-playfair font-bold text-white mt-2">Divine Transformations</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-{{ $testimonials->count() >= 3 ? '3' : $testimonials->count() }} gap-8">
                @foreach($testimonials as $testimonial)
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-3xl shadow-lg relative"
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <i class="fas fa-quote-left text-3xl text-gold-500/30 absolute top-6 left-6"></i>
                    <div class="flex items-center gap-4 mb-6">
                        <img src="{{ $testimonial->avatar_url }}" alt="{{ $testimonial->student_name }}" loading="lazy"
                             class="w-14 h-14 rounded-full border-2 border-gold-500 shadow-md object-cover flex-shrink-0">
                        <div>
                            <h4 class="font-bold text-white">{{ $testimonial->student_name }}</h4>
                            @if($testimonial->course_taken)
                            <span class="text-emerald-300 text-xs">{{ $testimonial->course_taken }}</span>
                            @endif
                        </div>
                    </div>
                    <p class="text-emerald-100 leading-relaxed italic mb-5 text-sm">"{{ $testimonial->quote }}"</p>
                    <div class="flex text-gold-400 gap-0.5">
                        @for($i=1; $i<=5; $i++)
                        <i class="{{ $i <= $testimonial->rating ? 'fas' : 'far' }} fa-star text-sm"></i>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Final CTA --}}
    <section class="py-24 bg-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="zoom-in">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold text-emerald-900 mb-5">Begin Your Sacred Journey Today</h2>
            <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto">Join thousands of students across the globe who have embraced the beautiful path of learning the Quran.</p>
            <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '923448559422' }}?text={{ urlencode($settings['whatsapp_message'] ?? 'Assalamualaikum') }}"
               target="_blank"
               class="inline-flex items-center gap-3 bg-emerald-900 text-white px-10 py-5 rounded-2xl text-lg font-semibold hover:bg-gold-500 hover:text-emerald-900 transition-all duration-300 shadow-xl hover:-translate-y-1">
                <i class="fab fa-whatsapp text-2xl"></i> Schedule Your Free Trial Class
            </a>
        </div>
    </section>
</x-layouts.app>
