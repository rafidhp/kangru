<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kangru - Tes Kepribadian</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <header x-data="{ open: false }" class="flex justify-between items-center px-6 md:px-12 py-4 border border-black rounded-lg bg-white/60 backdrop-blur-md fixed top-0 left-0 w-full z-50">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-8">
            <span class="font-semibold">Kangru</span>
        </div>
        <nav :class="{'block': open, 'hidden': !open}" class="absolute top-full left-0 w-full bg-white/90 backdrop-blur-md md:static md:block md:w-auto md:bg-transparent md:backdrop-blur-0 md:flex md:space-x-6">
            <a href="{{ url('/') }}" class="block px-4 py-2 md:flex md:flex-col md:items-center {{ request()->is('/') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">
            Beranda
            @if(request()->is('/'))
                <span class="block w-6 h-1 bg-indigo-600 rounded mt-1"></span>
            @endif
            </a>
            <a href="{{ url('/artikel') }}" class="block px-4 py-2 md:flex md:flex-col md:items-center {{ request()->is('artikel') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">
            Artikel
            @if(request()->is('artikel'))
                <span class="block w-6 h-1 bg-indigo-600 rounded mt-1"></span>
            @endif
            </a>
            <a href="{{ url('/mbti_test') }}" class="block px-4 py-2 md:flex md:flex-col md:items-center {{ request()->is('mbti_test') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">
            Tes Kepribadian
            @if(request()->is('mbti_test'))
                <span class="block w-6 h-1 bg-indigo-600 rounded mt-1"></span>
            @endif
            </a>
            @if(Auth::check())
                <div x-data="{ openProfile: false }" class="relative block px-4 py-2 md:flex md:flex-col md:items-center">
                    <button @click="openProfile = !openProfile" class="text-indigo-600 font-semibold hover:text-indigo-500 transition duration-200 focus:outline-none">
                        {{ Auth::user()->name }}
                    </button>
                    <div x-show="openProfile" @click.away="openProfile = false" class="absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded-md shadow-lg z-50">
                    </div>
                </div>
            @else
                <a href="{{ url('/login') }}" class="block px-4 py-2 md:flex md:flex-col md:items-center bg-indigo-600 hover:bg-indigo-500 text-white rounded-lg mb-0 transition-transform duration-200 hover:scale-105 text-center">
                    Masuk
                </a>
            @endif
        </nav>
        <button @click="open = !open" class="md:hidden text-indigo-600 focus:outline-none" aria-label="Toggle menu">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </header>
    <div class="h-20 md:h-20"></div>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <!-- Credit Section -->
    <section class="bg-white border-t border-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <img src="{{ asset('assets/logo.png') }}" alt="Kangru Logo" class="h-10">
                    <p class="text-gray-600 text-sm">Mulailah Perjalanan Karir Anda bersama <span class="font-semibold">Kangru</span></p>
                </div>
                <div>
                    <h3 class="text-gray-900 font-semibold mb-4">Product</h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li><a href="{{ url('/') }}" class="hover:text-indigo-600">Beranda</a></li>
                        <li><a href="{{ url('/artikel') }}" class="hover:text-indigo-600">Artikel</a></li>
                        <li><a href="{{ url('/tes-kepribadian') }}" class="hover:text-indigo-600">Tes Minat Bakat</a></li>
                        <li><a href="#faq" class="hover:text-indigo-600">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-gray-900 font-semibold mb-4">Company</h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li><a href="#" class="hover:text-indigo-600">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Careers</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Leadership</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Partners</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-gray-900 font-semibold mb-4">Social</h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li><a href="#" class="hover:text-indigo-600">Instagram</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Twitter</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Facebook</a></li>
                        <li><a href="#" class="hover:text-indigo-600">LinkedIn</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Github</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-6 flex flex-col md:flex-row items-center justify-between text-gray-500 text-xs">
                <p>© 2025 Kangru Software Inc.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" aria-label="GitHub" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.004.07 1.532 1.032 1.532 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.923.678 1.861 0 1.343-.012 2.425-.012 2.754 0 .268.18.58.688.482A10.02 10.02 0 0022 12.017C22 6.484 17.523 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 11.268h-3v-5.604c0-1.337-.026-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.967v5.7h-3v-10h2.881v1.367h.041c.401-.761 1.379-1.562 2.838-1.562 3.036 0 3.6 2 3.6 4.59v5.605z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Facebook" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.325v21.351c0 .732.592 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.466.099 2.797.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.312h3.59l-.467 3.622h-3.123v9.293h6.116c.732 0 1.324-.592 1.324-1.324v-21.35c0-.733-.592-1.325-1.324-1.325z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.865 9.865 0 01-3.127 1.195 4.916 4.916 0 00-8.38 4.482 13.94 13.94 0 01-10.11-5.13 4.822 4.822 0 001.523 6.574 4.903 4.903 0 01-2.228-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.923 4.923 0 004.6 3.417 9.867 9.867 0 01-6.102 2.105c-.396 0-.787-.023-1.17-.067a13.945 13.945 0 007.557 2.212c9.054 0 14.002-7.496 14.002-13.986 0-.21 0-.423-.015-.633a9.936 9.936 0 002.457-2.548l-.047-.02z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm4.75-.88a1.12 1.12 0 11-2.24 0 1.12 1.12 0 012.24 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
