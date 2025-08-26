@extends('layouts.app')

@section('title', __('site.about.brief'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="px-4 sm:px-6 lg:px-20 mt-16">
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-cyan-300 mb-6 {{ app()->getLocale() == 'ar' ? 'rubik' : '' }}">
                {{ __('site.about.founder') }}
            </h2>
            <div
                class="rounded-2xl backdrop-blur-lg bg-white/5 border border-white/10 shadow-xl 
                    flex flex-col md:flex-row-reverse items-stretch">

                {{-- Founder Text --}}
                <div class="flex-1 p-4 sm:p-6 flex flex-col justify-center">
                    <div class="text-gray-300 leading-relaxed space-y-4">
                        <p>{{ __('site.about.founder_text_1') }}</p>
                        <p>{{ __('site.about.founder_text_2') }}</p>
                        <p>{{ __('site.about.founder_text_3') }}</p>
                        <p>{{ __('site.about.founder_text_4') }}</p>
                        <p>{{ __('site.about.founder_text_5') }}</p>
                        <p>{{ __('site.about.founder_text_6') }}</p>
                        <p>{{ __('site.about.founder_text_7') }}</p>
                        <p>{{ __('site.about.founder_text_8') }}</p>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
        <section class="px-4 sm:px-6 lg:px-20 mt-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-cyan-300 mb-6 {{ app()->getLocale() == 'ar' ? 'rubik' : '' }}">
                {{ __('site.about.research') }}
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                <a href="{{ asset('pdfs/research.pdf') }}" target="_blank"
                    class="h-32 sm:h-36 md:h-40 rounded-xl border border-white/10 
                        flex items-center justify-center text-center text-white font-semibold
                        text-sm sm:text-base transition transform hover:scale-105 shadow-lg relative overflow-hidden">

                    <!-- Background Image -->
                    <img src="{{ asset('images/hero.png') }}" alt="Research PDF"
                        class="absolute inset-0 w-full h-full object-cover opacity-20 hover:opacity-80 transition">

                    <!-- Overlay Text -->
                    <span class="relative z-10 px-2">{{ __('site.about.research_pdf') }}</span>
                </a>
            </div>
        </section>
    </div>

    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
        <section class="px-4 sm:px-6 lg:px-20 mt-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-cyan-300 mb-6 {{ app()->getLocale() == 'ar' ? 'rubik' : '' }}">
                {{ __('site.about.partners') }}
            </h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @foreach (range(1, 13) as $partner)
                    <div
                        class="h-28 sm:h-32 md:h-36 rounded-xl bg-white/85 border border-white/10 
                        flex items-center justify-center p-4 transition-transform duration-300 ease-in-out hover:scale-110">

                        <img src="{{ asset('images/partners/' . $partner . '.png') }}" alt="Partner {{ $partner }}"
                            class="max-h-full max-w-full object-cover" />
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
