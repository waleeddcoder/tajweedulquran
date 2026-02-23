<x-layouts.app>
    <x-slot:title>About Us | Tajweed Ul Quran</x-slot>

    <!-- Page Header -->
    <div class="pt-12 pb-16 bg-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('{{ asset('images/pattern.png') }}')] opacity-5 mix-blend-overlay z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-playfair font-bold text-white mb-4" data-aos="fade-up">About Our Academy</h1>
            <p class="text-emerald-100 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Preserving the sacred tradition of Quranic recitation through modern online education.</p>
        </div>
    </div>

    <!-- About Section Content -->
    <section class="py-20 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 mb-24">
                <div class="lg:w-1/2 relative" data-aos="fade-right">
                    <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-2xl relative">
                        <img src="{{ asset('images/hifz-course.jpeg') }}" alt="About Us" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="lg:w-1/2" data-aos="fade-left">
                    <span class="text-gold-500 font-semibold tracking-wider uppercase text-sm">Our Mission</span>
                    <h2 class="text-3xl lg:text-4xl font-playfair font-bold text-emerald-900 mt-2 mb-6">Spreading the Light of Quran</h2>
                    <p class="text-gray-600 leading-relaxed text-lg mb-6">
                        Tajweed Ul Quran was founded with a singular vision: to make high-quality, authentic Quranic education accessible to Muslims worldwide, regardless of their location.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-lg mb-8">
                        Our meticulously selected faculty comprises scholars and Hafiz-e-Quran who trace their recitation lineage (Ijazah) back through continuous chains. We focus not just on reading, but on spiritual connection and precise Arabic phonetics.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="border-l-4 border-gold-500 pl-4">
                            <h4 class="font-bold text-2xl text-emerald-900">5,000+</h4>
                            <p class="text-sm text-gray-500">Students Taught</p>
                        </div>
                        <div class="border-l-4 border-gold-500 pl-4">
                            <h4 class="font-bold text-2xl text-emerald-900">100%</h4>
                            <p class="text-sm text-gray-500">Certified Tutors</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core Values -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-4xl font-playfair font-bold text-emerald-900 mb-4">Our Core Values</h2>
                <div class="w-24 h-1 bg-gold-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-emerald-900/5 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 block">Authenticity</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">We strictly adhere to the traditional rules of Tajweed, ensuring the words of Allah are recited precisely as revealed.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-emerald-900/5 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-gold-50 text-gold-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 block">Patience</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Every student learns at their own pace. Our tutors are trained to teach with utmost patience, love, and encouragement.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-emerald-900/5 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 block">Accessibility</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Breaking geographical barriers, we bring world-class Quranic scholars directly to your digital screens worldwide.</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
