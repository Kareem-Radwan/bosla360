@extends('layouts.app')

@section('title', __('site.results.title'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="px-4 sm:px-6 lg:px-20 mt-16">
        <h1 class="text-2xl sm:text-2xl md:text-4xl {{ app()->getLocale() == 'ar' ? 'rubik' : "" }} font-extrabold tracking-wide text-cyan-400 mb-8">
            {{ __('site.results.title') }}
        </h1>

        <div
            class="w-full max-w-4xl mx-auto p-4 sm:p-6 md:p-8 rounded-2xl backdrop-blur-lg bg-white/5 border border-white/10 shadow-xl space-y-6 sm:space-y-8">
            <p class="text-gray-300 text-sm sm:text-base">{{ __('site.results.description') }}</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mt-4">
                @foreach ($recommended as $program)
                    <div
                        class="p-4 sm:p-6 rounded-xl bg-gradient-to-br from-purple-500/10 to-cyan-500/10 border border-white/10 shadow-lg">
                        <h3 class="text-lg sm:text-xl font-bold text-cyan-300">
                            {{ __('site.programs.' . Str::snake($program)) }}
                        </h3>
                        <p class="text-gray-300 mt-2 text-sm sm:text-base">{{ __('site.results.program_description') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
