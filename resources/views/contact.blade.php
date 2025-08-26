@extends('layouts.app')

@section('title', __('site.contact.title'))

@section('content')
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="px-4 sm:px-6 lg:px-20 mt-16">

        <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-wide text-cyan-400 mb-8 {{ app()->getLocale() == 'ar' ? 'rubik' : "" }}">
            {{ __('site.contact.title') }}
        </h1>

        <form method="POST" action="#"
            class="w-full max-w-lg mx-auto p-6 sm:p-8 rounded-2xl backdrop-blur-lg bg-white/5 border border-white/10 shadow-xl space-y-6">

            @csrf

            <div>
                <label class="block font-semibold mb-2 text-gray-200">{{ __('site.contact.name') }}</label>
                <input type="text" name="name"
                    class="w-full rounded-lg px-4 py-3 bg-white/10 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-cyan-400"
                    placeholder="{{ __('site.contact.placeholder_name') }}">
            </div>

            <div>
                <label class="block font-semibold mb-2 text-gray-200">{{ __('site.contact.email') }}</label>
                <input type="email" name="email"
                    class="w-full rounded-lg px-4 py-3 bg-white/10 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-cyan-400"
                    placeholder="{{ __('site.contact.placeholder_email') }}">
            </div>

            <div>
                <label class="block font-semibold mb-2 text-gray-200">{{ __('site.contact.message') }}</label>
                <textarea name="message" rows="4"
                    class="w-full rounded-lg px-4 py-3 bg-white/10 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-cyan-400"
                    placeholder="{{ __('site.contact.placeholder_message') }}"></textarea>
            </div>

            <button type="submit"
                class="w-full py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 text-black font-bold tracking-wide hover:from-cyan-400 hover:to-blue-400 transition">
                {{ __('site.contact.send') }}
            </button>
        </form>
    </div>
@endsection
