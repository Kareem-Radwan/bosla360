@extends('layouts.app')

@section('title', __('site.home.title'))

@section('content')
    <!-- HERO -->
    <!-- HERO -->
    <section class="relative w-full bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/herolay.jpg') }}'); height: 87vh;">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/80"></div>

        <!-- Content Wrapper -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
            <h1
                class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-white {{ app()->getLocale() == 'ar' ? 'rubik' : '' }}">
                {{ __('site.hero.tagline') }}
            </h1>
            <p class="mt-4 text-gray-200" style="max-width: 920px;">
                {{ __('site.hero.support') }}
            </p>
            <a href="{{ route('personality') }}"
                class="inline-block mt-6 px-6 py-3 bg-indigo-600 text-white rounded shadow hover:bg-indigo-700 transition">
                {{ __('site.cta.start') }}
            </a>
        </div>
    </section>

    <!-- About short -->
    <section class="py-8 border-t px-4 sm:px-6 lg:px-20" style="border-top: none">
        <div class="flex flex-col {{ app()->getLocale() == 'ar' ? 'lg:flex-row' : 'lg:flex-row' }} items-center gap-8">
            <!-- TEXT (Left on desktop, Bottom on mobile) -->
            <div
                class="flex-1 pb-4 order-2 lg:order-1 text-center {{ app()->getLocale() == 'ar' ? 'lg:text-right' : 'lg:text-left' }}">
                <h2 class="text-3xl {{ app()->getLocale() == 'ar' ? 'rubik' : '' }} font-bold">
                    {{ __('site.about.title') }}
                </h2>
                <p class="mt-2">{{ __('site.about.story1') }}</p>
                <p class="mt-2">{{ __('site.about.story2') }}</p>
                <p class="mt-2">{{ __('site.about.story3') }}</p>

                <a href="{{ route('about') }}"
                    class="inline-block mt-4 px-5 py-2 bg-indigo-600 text-white font-medium rounded hover:bg-indigo-700 transition-colors">
                    {{ __('site.read.more') }}
                </a>
            </div>

            <!-- IMAGE (Right on desktop, Top on mobile) -->
            <div class="flex-1 order-1 lg:order-2">
                <img src="{{ asset('images/hero.png') }}" alt="{{ __('site.about.title') }}"
                    class="w-full h-auto rounded-lg object-cover">
            </div>
        </div>
    </section>

    <!-- Stats / Counter Section -->
    <section class="py-16 border-t border-white">
        <div class="max-w-6xl mx-auto text-center px-4 sm:px-6 lg:px-20">
            <h2 class="text-2xl md:text-3xl font-bold mb-10 {{ app()->getLocale() == 'ar' ? 'rubik' : '' }}">
                {{ __('site.stats.title') }}
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Trainees -->
                <div class="p-4">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-cyan-400 flex items-center justify-center">
                        <span class="{{ app()->getLocale() === 'ar' ? '' : 'mr-1' }}">+</span>
                        <span class="counter" data-target="11500">0</span>
                    </h3>
                    <p class="mt-2 text-gray-300">{{ __('site.stats.trainees') }}</p>
                </div>

                <!-- Hours -->
                <div class="p-4">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-cyan-400 flex items-center justify-center">
                        <span class="{{ app()->getLocale() === 'ar' ? '' : 'mr-1' }}">+</span>
                        <span class="counter" data-target="6250">0</span>
                    </h3>
                    <p class="mt-2 text-gray-300">{{ __('site.stats.hours') }}</p>
                </div>

                <!-- Entities -->
                <div class="p-4">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-cyan-400 flex items-center justify-center">
                        <span class="{{ app()->getLocale() === 'ar' ? '' : 'mr-1' }}">+</span>
                        <span class="counter" data-target="75">0</span>
                    </h3>
                    <p class="mt-2 text-gray-300"
                        style="{{ app()->getLocale() === 'ar' ? 'margin-right: 10px;' : 'margin-left: 10px;' }}">
                        {{ __('site.stats.entities') }}</p>
                </div>

                <!-- Camps -->
                <div class="p-4">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-cyan-400 flex items-center justify-center">
                        <span class="{{ app()->getLocale() === 'ar' ? '' : 'mr-1' }}">+</span>
                        <span class="counter" data-target="320">0</span>
                    </h3>
                    <p class="mt-2 text-gray-300">{{ __('site.stats.camps') }}</p>
                </div>

                <!-- Workshops -->
                <div class="p-4">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-cyan-400 flex items-center justify-center">
                        <span class="{{ app()->getLocale() === 'ar' ? '' : 'mr-1' }}">+</span>
                        <span class="counter" data-target="500">0</span>
                    </h3>
                    <p class="mt-2 text-gray-300"
                        style="{{ app()->getLocale() === 'ar' ? 'margin-right: 13px;' : 'margin-left: 13px;' }}">
                        {{ __('site.stats.workshops') }}</p>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const counters = document.querySelectorAll(".counter");
                const speed = 200;

                const animateCounters = () => {
                    counters.forEach(counter => {
                        const target = +counter.getAttribute("data-target");
                        let count = 0;
                        const increment = Math.ceil(target / speed);

                        const updateCount = () => {
                            count += increment;
                            if (count < target) {
                                counter.innerText = count.toLocaleString();
                                requestAnimationFrame(updateCount);
                            } else {
                                counter.innerText = target.toLocaleString();
                            }
                        };

                        updateCount();
                    });
                };

                // Trigger when section enters viewport
                const section = document.querySelector("section .counter").closest("section");
                const observer = new IntersectionObserver(entries => {
                    if (entries[0].isIntersecting) {
                        animateCounters();
                        observer.disconnect();
                    }
                }, {
                    threshold: 0.3
                });

                observer.observe(section);
            });
        </script>
    @endpush

    <section class="py-12 border-t px-4 sm:px-6 lg:px-20" x-data="{
        currentIndex: 0,
        total: 8,
        isRTL: '{{ app()->getLocale() }}' === 'ar',
        interval: null,
        start() { this.interval = setInterval(() => { this.next() }, 4700) },
        stop() { clearInterval(this.interval) },
        next() { this.currentIndex = (this.currentIndex + 1) % this.total },
        prev() { this.currentIndex = (this.currentIndex - 1 + this.total) % this.total }
    }" x-init="start()"
        @mouseenter="stop()" @mouseleave="start()">

        <h2
            class="text-2xl sm:text-3xl font-bold text-cyan-300 mb-6 text-center {{ app()->getLocale() == 'ar' ? 'rubik' : '' }}">
            {{ __('site.gallery.title') ?? 'Our Gallery' }}
        </h2>

        <div class="relative overflow-hidden w-full max-w-6xl mx-auto rounded-2xl">
            <!-- Carousel wrapper -->
            <div class="flex transition-transform duration-700 ease-in-out"
                :style="isRTL
                    ?
                    `transform: translateX(${currentIndex * 100}%);` :
                    `transform: translateX(-${currentIndex * 100}%);`">

                @foreach (range(1, 8) as $i)
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('images/gallery/' . $i . '.jpg') }}" alt="Gallery {{ $i }}"
                            class="w-full object-cover max-h-[600px] rounded-2xl">
                    </div>
                @endforeach
            </div>

            <!-- Left Button -->
            <button @click="isRTL ? next() : prev()"
                class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black/40 text-white p-2 rounded-full hover:bg-black/70 transition">
                &#10094;
            </button>

            <!-- Right Button -->
            <button @click="isRTL ? prev() : next()"
                class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black/40 text-white p-2 rounded-full hover:bg-black/70 transition">
                &#10095;
            </button>
        </div>

        <!-- Dots indicator -->
        <div class="flex justify-center mt-4 space-x-2">
            <template x-for="(dot, index) in total" :key="index">
                <button @click="currentIndex = index" class="w-3 h-3 rounded-full"
                    :class="index === currentIndex ? 'bg-cyan-400' : 'bg-gray-500'">
                </button>
            </template>
        </div>
    </section>


    <!-- Who we serve preview -->
    <section class="py-8 border-t px-4 sm:px-6 lg:px-20">
        <h2 class="text-xl font-bold">{{ __('site.who.title') ?? 'Who We Serve' }}</h2>
        <div class="grid gap-4 mt-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="p-4 border rounded">{{ __('site.who.children') }}</div>
            <div class="p-4 border rounded">{{ __('site.who.parents') }}</div>
            <div class="p-4 border rounded">{{ __('site.who.teachers') }}</div>
        </div>
        <a href="{{ route('who') }}"
            class="inline-block mt-3 px-5 py-2 bg-indigo-600 text-white font-medium rounded hover:bg-indigo-700 transition-colors">
            {{ __('site.more') }}
        </a>
    </section>
@endsection
