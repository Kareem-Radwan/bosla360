<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">

    <!-- English Meta -->
    <meta name="description"
        content="Bosla is a life map helping individuals grow mindfully across personal, professional, family & social dimensions to build a resilient future.">
    <meta name="keywords"
        content="self-awareness, personal development, bosla, 360, bosla transformation, sustainable development, hany salah alnagar, hany alnagar, professional transformation, identity, personal growth">

    <!-- Arabic Meta -->
    <meta name="description" lang="ar"
        content="بوصلة هي خريطة حياة تساعد الأفراد على النمو بوعي عبر الأبعاد الشخصية، المهنية، الأسرية والاجتماعية لبناء مستقبل resilient ومتين.">
    <meta name="keywords" lang="ar"
        content="الوعي الذاتي, التنمية الشخصية, بوصلة, التحول المستدام, hany salah alnagar, التحول المهني, الهوية, النمو الشخصي">

    <meta name="author" content="Hany Salah El-Nagar">
    <title>Bosla | Map of a Mindful Generation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/hero.png') }}">
</head>

<body x-data="{ navOpen: false }"
    class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white font-sans antialiased">

    <header class="backdrop-blur-md bg-white/5 border-b border-white/10 sticky top-0 z-50"
        style="position: sticky; width: 100%; top: 0;">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="/"
                class="text-2xl font-extrabold tracking-wide text-cyan-400 hover:text-cyan-300 transition">
                <img src="../images/{{ __('site.nav.logo') }}" width="200px" alt="">
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center gap-6 relative">
                <a href="{{ route('home') }}" class="hover:text-cyan-300 transition">{{ __('site.nav.home') }}</a>

                <!-- Mega menu parent -->
                <div class="relative group inline-block">
                    <!-- Main link -->
                    <a href="{{ route('about') }}" class="hover:text-cyan-300 transition block">
                        {{ __('site.nav.about') }} >
                    </a>

                    <!-- Mega menu dropdown -->
                    <div style="width: {{ app()->getLocale() === 'ar' ? '175px' : '150px' }}; background-color: #444444"
                        class="absolute left-0 mt-2 w-64 p-4 bg-gray-900 text-white rounded-lg shadow-lg
    opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="{{ route('about.story') }}" class="block px-2 py-1 hover:text-cyan-300">
                            {{ __('site.about.story') }}
                        </a>
                        <a href="{{ route('about.brief') }}" class="block px-2 py-1 hover:text-cyan-300">
                            {{ __('site.about.brief') }}
                        </a>
                    </div>
                </div>

                <a href="{{ route('who') }}" class="hover:text-cyan-300 transition">{{ __('site.nav.who') }}</a>
                <a href="{{ route('programs') }}"
                    class="hover:text-cyan-300 transition">{{ __('site.nav.programs') }}</a>
                <a href="{{ route('contact') }}"
                    class="px-4 py-2 rounded-full bg-cyan-500 hover:bg-cyan-400 text-black font-semibold transition">
                    {{ __('site.nav.contact') }}
                </a>
                <a href="{{ route('lang.switch', app()->getLocale() === 'ar' ? 'en' : 'ar') }}"
                    class="px-4 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 text-black font-bold tracking-wide hover:from-cyan-400 hover:to-blue-400 transition">
                    {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
                </a>
            </nav>

            <!-- Mobile Toggle Button -->
            <button id="menu-toggle" class="lg:hidden text-white text-2xl focus:outline-none">
                ☰
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden flex items-center flex-col gap-4 px-6 py-4 bg-white/10 backdrop-blur-md lg:hidden">
            <a href="{{ route('home') }}" class="hover:text-cyan-300 transition">{{ __('site.nav.home') }}</a>
            <a href="{{ route('about') }}" class="hover:text-cyan-300 transition">{{ __('site.nav.about') }}</a>
            <a href="{{ route('who') }}" class="hover:text-cyan-300 transition">{{ __('site.nav.who') }}</a>
            <a href="{{ route('programs') }}" class="hover:text-cyan-300 transition">{{ __('site.nav.programs') }}</a>
            <a href="{{ route('contact') }}" style="width: fit-content"
                class="px-4 py-2 rounded-full bg-cyan-500 hover:bg-cyan-400 text-black font-semibold transition">
                {{ __('site.nav.contact') }}
            </a>
            <a href="{{ route('lang.switch', app()->getLocale() === 'ar' ? 'en' : 'ar') }}" style="width: fit-content"
                class="px-4 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 text-black font-bold tracking-wide hover:from-cyan-400 hover:to-blue-400 transition">
                {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
            </a>
        </div>
    </header>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        document.addEventListener("DOMContentLoaded", function() {
            const menu = document.getElementById("about-menu");
            const dropdown = menu.querySelector("div");

            menu.addEventListener("mouseenter", () => {
                dropdown.classList.remove("hidden");
            });

            menu.addEventListener("mouseleave", () => {
                dropdown.classList.add("hidden");
            });
        });
    </script>


    <main>
        @yield('content')
    </main>

    <footer class="backdrop-blur-md bg-white/5 border-t border-white/10 mt-16" style="padding-block: 20px">
        <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Logo & About -->
            <div>
                <img src="../images/{{ __('site.nav.logo') }}" alt="Bosla Logo" class="w-50 mb-4">
                <p class="text-gray-300 text-sm leading-relaxed">
                    {{ __('site.footer.about_text') }}
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-semibold mb-4">{{ __('site.footer.quick_links') }}</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}"
                            class="text-gray-300 hover:text-cyan-300 transition">{{ __('site.nav.home') }}</a></li>
                    <li><a href="{{ route('about') }}"
                            class="text-gray-300 hover:text-cyan-300 transition">{{ __('site.nav.about') }}</a></li>
                    <li><a href="{{ route('programs') }}"
                            class="text-gray-300 hover:text-cyan-300 transition">{{ __('site.nav.programs') }}</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="text-gray-300 hover:text-cyan-300 transition">{{ __('site.nav.contact') }}</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-white font-semibold mb-4">{{ __('site.footer.contact') }}</h3>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li>{{ __('site.footer.address') }}</li>
                    <li dir="ltr"><a href="tel:{{ __('site.footer.phone') }}">{{ __('site.footer.phone') }}</a>
                    </li>
                    <li>{{ __('site.footer.email') }}</li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-white font-semibold mb-4">{{ __('site.footer.follow') }}</h3>
                <div class="flex gap-4">
                    <a target="_blank" href="https://www.linkedin.com/company/bosla-transformation"
                        class="text-gray-300 hover:text-cyan-300 transition">
                        <!-- LinkedIn Icon -->
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.45 20.45h-3.55v-5.3c0-1.27-.02-2.9-1.77-2.9-1.77 0-2.04 1.38-2.04 2.8v5.4H9.55V9h3.41v1.56h.05c.48-.9 1.65-1.85 3.39-1.85 3.62 0 4.29 2.38 4.29 5.47v6.27zM5.34 7.43a2.06 2.06 0 11.01-4.12 2.06 2.06 0 01-.01 4.12zM7.11 20.45H3.56V9h3.55v11.45zM22.23 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.21 0 22.23 0z" />
                        </svg>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/share/16x6gkdJJb/"
                        class="text-gray-300 hover:text-cyan-300 transition">
                        <!-- Facebook Icon -->
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.99 3.66 9.13 8.44 9.87v-6.99H7.9V12h2.58v-1.89c0-2.55 1.52-3.95 3.84-3.95 1.11 0 2.27.2 2.27.2v2.49h-1.28c-1.26 0-1.65.78-1.65 1.58V12h2.81l-.45 2.88h-2.36v6.99c4.78-.74 8.44-4.88 8.44-9.87 0-5.5-4.46-9.96-9.96-9.96z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t mt-4 border-white/10 py-4 text-center text-gray-400 text-sm">
            © {{ date('Y') }} Bosla. {{ __('site.footer.rights_reserved') }}
        </div>
    </footer>

    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('nav', {
                navOpen: false
            })
        })
    </script>
    @stack('scripts')

</body>

</html>
