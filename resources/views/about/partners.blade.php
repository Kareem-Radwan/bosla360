@extends('layouts.app')

@section('title', __('site.about.partners'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
        <section class="px-4 sm:px-6 lg:px-20 mt-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-cyan-300 mb-6 {{ app()->getLocale() == 'ar' ? 'rubik' : "" }}">{{ __('site.about.partners') }}</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                @foreach (range(1, 4) as $partner)
                    <div
                        class="h-32 sm:h-36 md:h-40 rounded-xl backdrop-blur-lg bg-white/5 border border-white/10 
                            flex items-center justify-center text-gray-400 text-sm sm:text-base">
                        {{ __('site.about.partner_logo') }}
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
