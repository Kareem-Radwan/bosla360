@extends('layouts.app')

@section('title', __('site.test.title'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="px-4 sm:px-6 lg:px-20 mt-16">
        <h1 class="text-2xl sm:text-3xl md:text-4xl {{ app()->getLocale() == 'ar' ? 'rubik' : "" }} font-extrabold tracking-wide text-cyan-400 mb-8">
            {{ __('site.test.title') }}
        </h1>

        <form method="POST" action="{{ route('personality.submit') }}"
            class="w-full max-w-2xl mx-auto space-y-6 sm:space-y-8 p-4 sm:p-6 md:p-8 rounded-2xl backdrop-blur-lg bg-white/5 border border-white/10 shadow-xl">
            @csrf

            @foreach (range(1, 5) as $q)
                <div>
                    <label class="block font-semibold mb-2 text-gray-200 text-sm sm:text-base">
                        {{ __('site.test.question') }} {{ $q }}
                    </label>
                    <select name="q{{ $q }}"
                        class="w-full rounded-lg px-4 py-3 sm:py-4 bg-white/10 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-cyan-400 text-sm sm:text-base">
                        <option class="text-gray-700">{{ __('site.test.option1') }}</option>
                        <option class="text-gray-700">{{ __('site.test.option2') }}</option>
                        <option class="text-gray-700">{{ __('site.test.option3') }}</option>
                    </select>
                </div>
            @endforeach

            <button type="submit"
                class="w-full py-3 sm:py-4 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 text-black font-bold tracking-wide hover:from-cyan-400 hover:to-blue-400 transition text-sm sm:text-base">
                {{ __('site.test.get_results') }}
            </button>
        </form>
    </div>
@endsection
