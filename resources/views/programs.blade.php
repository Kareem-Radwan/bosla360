@extends('layouts.app')

@section('title', __('site.programs.title'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="px-4 sm:px-6 lg:px-20 mt-16">

        <h1 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-extrabold tracking-wide text-cyan-400 mb-8 {{ app()->getLocale() == 'ar' ? 'rubik' : "" }}">
            {{ __('site.programs.title') }}
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
            @foreach (['training', 'workshops', 'seminars', 'consulting', 'coaching', 'assessments'] as $key)
                <div
                    class="group p-6 rounded-2xl backdrop-blur-md bg-white/5 border border-white/10 shadow-lg relative overflow-hidden transition transform hover:scale-105 duration-300">

                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-br from-purple-500/20 to-cyan-500/20 blur-3xl">
                    </div>

                    <h2 class="text-lg sm:text-xl font-bold text-cyan-300">{{ __('site.programs.' . $key) }}</h2>
                    <p class="mt-2 sm:mt-3 text-gray-300 text-sm sm:text-base">{{ __('site.programs.' . $key . '.desc') }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
