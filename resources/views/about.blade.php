@extends('layouts.app')

@section('title', __('site.about.title'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
        <div class="space-y-12">
            {{-- Story Section --}}
            <section>
                <h1 class="text-3xl font-extrabold tracking-wide text-cyan-400 mb-6">
                    {{ __('site.about.title') }}
                </h1>
                <p
                    class="text-gray-300 leading-relaxed backdrop-blur-md bg-white/5 p-6 rounded-xl border border-white/10 shadow-lg">
                    {{ __('site.about.story') }}
                </p>
            </section>

            {{-- Vision & Founder Section --}}
            <section class="grid md:grid-cols-2 gap-8">
                <div class="p-6 rounded-2xl backdrop-blur-lg bg-white/5 border border-white/10 shadow-xl">
                    <h2 class="text-2xl font-bold text-cyan-300 mb-4">{{ __('site.about.vision') }}</h2>
                    <p class="text-gray-300">{{ __('site.about.vision_text') }}</p>
                </div>

                <div class="p-6 rounded-2xl backdrop-blur-lg bg-white/5 border border-white/10 shadow-xl">
                    <h2 class="text-2xl font-bold text-cyan-300 mb-4">{{ __('site.about.founder') }}</h2>
                    <p class="text-gray-300">{{ __('site.about.founder_text') }}</p>
                </div>
            </section>

            {{-- Partners Section --}}
            <section>
                <h2 class="text-2xl font-bold text-cyan-300 mb-6">{{ __('site.about.partners') }}</h2>
                <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
                    @foreach (range(1, 4) as $partner)
                        <div
                            class="h-32 rounded-xl backdrop-blur-lg bg-white/5 border border-white/10 flex items-center justify-center text-gray-400">
                            {{ __('site.about.partner_logo') }}
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection
