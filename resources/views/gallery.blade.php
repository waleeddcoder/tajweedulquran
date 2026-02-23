<x-layouts.app>
    <x-slot:title>Media Gallery | Tajweed Ul Quran</x-slot>

    <div class="pt-12 pb-16 bg-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-gold-500/30 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-playfair font-bold text-white mb-3" data-aos="fade-up">Sacred Moments</h1>
            <p class="text-emerald-200 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Glimpses from our online classes, certifications, and academy milestones.</p>
        </div>
    </div>

    <section class="py-16 bg-cream min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if($gallery->isEmpty())
                <div class="text-center py-24">
                    <div class="inline-block p-6 rounded-full bg-emerald-50 text-emerald-300 mb-4">
                        <i class="fas fa-images text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Gallery Coming Soon</h3>
                    <p class="text-gray-400">Check back soon for photos from our academy activities.</p>
                </div>
            @else
                {{-- Dynamic grid: auto-assign span sizes based on index for visual variety --}}
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 auto-rows-[200px] gap-4">
                    @foreach($gallery as $image)
                    @php
                        $s = $loop->index % 9;
                        // Pattern: index 0 = wide+tall, 3 = tall, 6 = wide, rest = normal 1x1
                        if ($s === 0)      { $span = 'col-span-2 row-span-2'; }
                        elseif ($s === 3)  { $span = 'row-span-2'; }
                        elseif ($s === 6)  { $span = 'col-span-2'; }
                        else              { $span = ''; }
                    @endphp
                    <div class="{{ $span }} relative group rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer"
                         data-aos="fade-up"
                         onclick="openLightbox('{{ $image->image_url }}', '{{ addslashes($image->title ?? '') }}')">
                        <div class="absolute inset-0 bg-emerald-900/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10 flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-3xl transform scale-75 group-hover:scale-100 transition-transform duration-300"></i>
                        </div>
                        <img src="{{ $image->image_url }}"
                             alt="{{ $image->title ?? 'Gallery Image' }}"
                             loading="lazy"
                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                        @if($image->title)
                        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4 z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="text-white text-sm font-medium truncate">{{ $image->title }}</p>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    {{-- Lightbox --}}
    <div id="gallery-lightbox" class="fixed inset-0 z-[200] hidden items-center justify-center bg-black/95 px-4 backdrop-blur-sm transition-opacity duration-300 opacity-0">
        <button onclick="closeLightbox()" class="absolute top-5 right-5 text-white/60 hover:text-white z-[210] focus:outline-none p-2 transition-colors">
            <i class="fas fa-times text-3xl"></i>
        </button>
        <div class="relative max-w-5xl w-full flex flex-col items-center">
            <img id="lightbox-img" src="" alt="" class="max-h-[85vh] w-auto mx-auto shadow-2xl rounded-xl">
            <p id="lightbox-caption" class="text-white/80 mt-5 text-center text-base font-playfair tracking-wide"></p>
        </div>
    </div>

    <script>
        const lightbox = document.getElementById('gallery-lightbox');
        const lbImg    = document.getElementById('lightbox-img');
        const lbCap    = document.getElementById('lightbox-caption');

        function openLightbox(src, title) {
            lbImg.src = src;
            lbCap.textContent = title;
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            requestAnimationFrame(() => {
                lightbox.classList.remove('opacity-0');
                lightbox.classList.add('opacity-100');
            });
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('opacity-100');
            lightbox.classList.add('opacity-0');
            setTimeout(() => {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                lbImg.src = '';
                document.body.style.overflow = '';
            }, 280);
        }

        lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
    </script>
</x-layouts.app>
