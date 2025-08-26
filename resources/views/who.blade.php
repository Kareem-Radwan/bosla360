@extends('layouts.app')

@section('title', __('site.who.title'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="px-4 sm:px-6 lg:px-20 mt-12">
        <h1
            class="text-3xl sm:text-4xl font-extrabold tracking-wide text-cyan-400 mb-8 {{ app()->getLocale() === 'ar' ? 'rubik' : '' }}">
            {{ __('site.who.title') }}
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
            @foreach (['children', 'parents', 'teachers', 'youth', 'teenagers', 'organizations', 'groups'] as $key)
                <div
                    class="relative group p-6 rounded-2xl backdrop-blur-md bg-white/5 border border-white/10 shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">

                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-br from-cyan-500/20 to-purple-500/20 blur-3xl">
                    </div>

                    <h2 class="text-xl sm:text-2xl font-bold text-cyan-300">{{ __('site.who.' . $key) }}</h2>
                    <p class="mt-3 text-gray-300 text-sm sm:text-base">{{ __('site.who.' . $key . '.desc') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
