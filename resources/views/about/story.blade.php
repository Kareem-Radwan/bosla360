@extends('layouts.app')

@section('title', __('site.about.story'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
        <div class="space-y-12 px-4 sm:px-6 lg:px-20 mt-12">

            {{-- Story Section --}}
            <section>
                <h1 class="text-2xl sm:text-3xl {{ app()->getLocale() == 'ar' ? 'rubik lg:text-right' : "lg:text-left" }} font-extrabold tracking-wide text-cyan-400 mb-6 text-center">
                    {{ __('site.about.story') }}
                </h1>
                <p
                    class="text-gray-300 leading-relaxed backdrop-blur-md bg-white/5 p-4 sm:p-6 rounded-xl border border-white/10 shadow-lg">
                    {{ __('site.about.story_text') }}
                </p>
            </section>

            {{-- Vision Section --}}
            <section>
                <div class="p-4 sm:p-6 rounded-2xl backdrop-blur-lg bg-white/5 border border-white/10 shadow-xl">
                    <h2 class="text-xl sm:text-2xl font-bold text-cyan-300 mb-4">
                        {{ __('site.about.vision') }}
                    </h2>
                    <p class="text-gray-300">{{ __('site.about.vision_text') }}</p>
                </div>
            </section>

        </div>
    </div>
@endsection
