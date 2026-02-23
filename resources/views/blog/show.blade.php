<x-layouts.app>
    <x-slot:title>{{ $post->seo_title ?? $post->title }} | Tajweed Ul Quran</x-slot>
    <x-slot:description>{{ $post->meta_description ?? Str::limit(strip_tags($post->content), 160) }}</x-slot>

    <!-- Article Header -->
    <div class="pt-12 pb-24 relative overflow-hidden bg-emerald-950">
        <div class="absolute inset-0 z-0">
            <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" loading="lazy"
                 class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-emerald-950/80 to-transparent z-0"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div data-aos="fade-up">
                <div class="flex items-center justify-center gap-4 text-emerald-300 text-sm font-medium mb-6">
                    <span><i class="far fa-calendar-alt mr-2 text-gold-400"></i> {{ $post->created_at->format('F d, Y') }}</span>
                    <span>&bull;</span>
                    <span>Admin</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-playfair font-bold text-white mb-6 leading-tight">{{ $post->title }}</h1>
            </div>
        </div>
    </div>

    <!-- Article Content -->
    <section class="py-20 bg-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <article class="bg-white rounded-3xl p-8 md:p-12 lg:p-16 shadow-xl border border-emerald-900/5 -mt-32 relative z-20" data-aos="fade-up" data-aos-delay="200">
                <div class="prose prose-lg prose-emerald max-w-none text-gray-700 font-inter">
                    {!! $post->content !!}
                </div>
                
                <div class="mt-16 pt-8 border-t border-gray-100 flex justify-between items-center">
                    <div class="text-gray-500 font-medium tracking-wide text-sm">SHARE ARTICLE</div>
                    <div class="flex gap-3">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' ' . request()->url()) }}" target="_blank" class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-colors">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Newsletter CTA -->
            <div class="mt-16 bg-emerald-900 rounded-3xl p-10 text-center relative overflow-hidden" data-aos="fade-up">
                <div class="absolute inset-0 bg-[url('{{ asset('images/pattern.png') }}')] opacity-5 mix-blend-overlay"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-playfair font-bold text-white mb-4">Start Your Quran Journey</h3>
                    <p class="text-emerald-100 mb-8 max-w-xl mx-auto">Get authentic teachings, Tajweed rules, and inspiration delivered directly to you. Start learning with our certified tutors.</p>
                    <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '923448559422' }}?text={{ urlencode('I read an article on your blog and want to start my Quran journey.') }}" class="inline-flex items-center gap-2 bg-gold-500 text-emerald-900 font-bold px-8 py-4 rounded-xl hover:bg-gold-400 transition-colors shadow-lg hover:-translate-y-1">
                        <i class="fab fa-whatsapp text-xl"></i> Schedule Free Trial
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
