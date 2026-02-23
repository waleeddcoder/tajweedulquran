<x-layouts.app>
    <x-slot:title>Islamic Blog | Tajweed Ul Quran</x-slot>

    <div class="pt-12 pb-16 bg-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 z-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-gold-500/30 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-playfair font-bold text-white mb-3" data-aos="fade-up">Insights & Articles</h1>
            <p class="text-emerald-200 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Read our latest articles on Quranic sciences, Tajweed rules, and Islamic living.</p>
        </div>
    </div>

    <section class="py-16 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @forelse($posts as $index => $post)

            {{-- First post: Full-width hero card --}}
            @if($index === 0)
            <article class="group mb-10 bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-emerald-900/5 flex flex-col md:flex-row" data-aos="fade-up">
                <a href="{{ route('blog.show', $post->slug) }}" class="block md:w-1/2 relative overflow-hidden" style="min-height: 320px;">
                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" loading="lazy"
                         class="w-full h-full object-cover absolute inset-0 transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/60 to-transparent md:bg-gradient-to-r md:from-transparent md:to-emerald-900/20"></div>
                </a>
                <div class="p-10 flex flex-col justify-center md:w-1/2">
                    <div class="flex items-center gap-2 text-xs text-gray-400 mb-4">
                        <i class="far fa-calendar-alt text-gold-500"></i>
                        <span>{{ $post->created_at->format('F d, Y') }}</span>
                        <span class="inline-block px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-medium ml-2">Featured</span>
                    </div>
                    <a href="{{ route('blog.show', $post->slug) }}">
                        <h2 class="text-3xl font-playfair font-bold text-gray-800 mb-4 group-hover:text-emerald-900 transition-colors leading-tight">{{ $post->title }}</h2>
                    </a>
                    <p class="text-gray-500 mb-6 leading-relaxed line-clamp-3">{{ Str::limit(strip_tags($post->content), 180) }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="btn-primary inline-flex w-max">
                        Read Article <i class="fas fa-arrow-right text-sm ml-2"></i>
                    </a>
                </div>
            </article>

            {{-- Remaining posts: magazine grid (2 medium + small cards) --}}
            @elseif($index === 1)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            @endif

            @if($index >= 1)
            <article class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-400 border border-emerald-900/5 flex flex-col"
                     data-aos="fade-up" data-aos-delay="{{ (($index - 1) % 3) * 100 }}">
                <a href="{{ route('blog.show', $post->slug) }}" class="block relative overflow-hidden"
                   style="height: {{ $index % 5 === 1 ? '260px' : '200px' }}">
                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" loading="lazy"
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-600">
                    <div class="absolute inset-0 bg-emerald-900/10 group-hover:bg-transparent transition-colors duration-300"></div>
                </a>
                <div class="p-7 flex flex-col grow">
                    <div class="text-xs text-gray-400 mb-3 flex items-center gap-2">
                        <i class="far fa-calendar-alt text-gold-500"></i>
                        {{ $post->created_at->format('M d, Y') }}
                    </div>
                    <a href="{{ route('blog.show', $post->slug) }}">
                        <h2 class="text-xl font-playfair font-bold text-gray-800 mb-3 group-hover:text-emerald-900 transition-colors leading-snug line-clamp-2">{{ $post->title }}</h2>
                    </a>
                    <p class="text-gray-500 text-sm mb-5 line-clamp-2 leading-relaxed">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="mt-auto inline-flex items-center text-emerald-800 font-semibold hover:text-gold-500 transition-colors text-sm group/link">
                        Read More <i class="fas fa-arrow-right ml-2 text-xs transform group-hover/link:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </article>
            @endif

            @empty
            <div class="text-center py-24">
                <div class="inline-block p-6 rounded-full bg-emerald-50 text-emerald-300 mb-4">
                    <i class="fas fa-pencil-alt text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">No Articles Yet</h3>
                <p class="text-gray-400">Our scholars are working on new content. Check back soon.</p>
            </div>
            @endforelse

            {{-- Close the grid div if there were posts --}}
            @if($posts->count() > 1)
            </div>
            @endif

            {{-- Pagination --}}
            @if($posts->hasPages())
            <div class="mt-14 flex justify-center">
                {{ $posts->links() }}
            </div>
            @endif

        </div>
    </section>
</x-layouts.app>
