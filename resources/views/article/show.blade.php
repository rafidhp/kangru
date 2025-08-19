<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $article->title }} - Kangru</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        html {
            font-size: 14px;
        }

        @media (min-width: 640px) {
            html {
                font-size: 16px;
            }
        }

        body {
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="text-gray-800 bg-gray-50">
    <!-- Navbar -->
    <header x-data="{ open: false }"
        class="flex justify-between items-center px-4 md:px-12 py-4 border border-[#b3b3b3] rounded-b-lg bg-white/60 backdrop-blur-md fixed top-0 left-0 w-full z-50">
        <a href="{{ route('dashboard') }}">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-8">
                <span class="font-semibold text-sm md:text-base">Kangru</span>
            </div>
        </a>

        <!-- Mobile menu button -->
        <button @click="open = !open" class="md:hidden p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <nav :class="{ 'block': open, 'hidden': !open }"
            class="absolute top-full left-0 w-full bg-white/95 backdrop-blur-md shadow-lg md:static md:block md:w-auto md:bg-transparent md:backdrop-blur-0 md:flex md:space-x-6 md:shadow-none">
            <div class="flex flex-col md:flex-row md:space-x-6 p-4 md:p-0 space-y-4 md:space-y-0">
                <a href="{{ url('/') }}"
                    class="flex flex-col items-center text-sm md:text-base transition {{ request()->is('/') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }} py-2 md:py-0">
                    Beranda
                    @if (request()->is('/'))
                        <span class="block w-6 h-1 bg-indigo-600 rounded-full mt-1"></span>
                    @endif
                </a>

                <a href="{{ url('/article') }}"
                    class="flex flex-col items-center text-sm md:text-base transition {{ request()->is('article*') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }} py-2 md:py-0">
                    Artikel
                    @if (request()->is('article*'))
                        <span class="block w-6 h-1 bg-indigo-600 rounded-full mt-1"></span>
                    @endif
                </a>

                <a href="{{ url('/mbti-test') }}"
                    class="flex flex-col items-center text-sm md:text-base transition {{ request()->is('tes-kepribadian') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }} py-2 md:py-0">
                    Tes Kepribadian
                    @if (request()->is('tes-kepribadian'))
                        <span class="block w-6 h-1 bg-indigo-600 rounded-full mt-1"></span>
                    @endif
                </a>

                @if (Auth::check())
                    <a href="{{ route('auth.logout') }}"
                        class="md:hidden bg-red-600 hover:bg-red-500 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">
                        Logout
                    </a>
                @else
                    <a href="{{ url('/login') }}"
                        class="md:hidden bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-lg text-center text-sm font-medium transition">
                        Masuk
                    </a>
                @endif
            </div>
        </nav>

        @if (Auth::check())
            <div x-data="{ openProfile: false }" class="relative hidden md:block px-4 py-2 md:flex md:flex-col md:items-center">
                <button @click="openProfile = !openProfile"
                    class="text-indigo-600 font-semibold hover:text-indigo-500 transition duration-200 focus:outline-none">
                    {{ Auth::user()->name }}
                </button>
                <div x-show="openProfile" @click.away="openProfile = false" x-transition
                    class="absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded-md shadow-lg z-50">
                    <a href="{{ route('auth.logout') }}"
                        class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                        Logout
                    </a>
                </div>
            </div>
        @else
            <a href="{{ url('/login') }}"
                class="hidden md:block px-4 py-2 md:flex md:flex-col md:items-center bg-indigo-600 hover:bg-indigo-500 text-white rounded-lg mb-0 transition-transform duration-200 hover:scale-105 text-center text-sm">
                Masuk
            </a>
        @endif
    </header>
    <div class="h-20 md:h-20"></div>

    <!-- Hero Section with decorative elements -->
    <section class="relative py-8 md:py-12 bg-gradient-to-b from-white to-indigo-50 overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-indigo-200/30 rounded-full blur-xl"></div>
        <div class="absolute top-32 right-16 w-16 h-16 bg-blue-200/40 rounded-full blur-lg"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-purple-200/30 rounded-full blur-md"></div>

        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center text-indigo-600 hover:text-indigo-500 font-medium transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Kembali
                </a>
            </div>

            <!-- Article Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Article Image -->
                <div class="relative">
                    @if ($article->image != null)
                        <img src="{{ asset('storage/article/' . $article->hashid . '_' . $article->image) }}"
                            alt="{{ $article->title }}"
                            class="w-full h-64 md:h-80 object-cover">
                    @else
                        <img src="{{ asset('storage/article/article_template.jpg') }}"
                            alt="{{ $article->title }}"
                            class="w-full h-64 md:h-80 object-cover">
                    @endif

                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ $article->category->category_name }}
                        </span>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="p-6 md:p-8">
                    <!-- Article Title -->
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                        {{ $article->title }}
                    </h1>

                    <!-- Article Meta -->
                    <div class="flex items-center text-gray-500 text-sm mb-6">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4m-6 0h6m-6 0a1 1 0 00-1 1v10a1 1 0 001 1h6a1 1 0 001-1V8a1 1 0 00-1-1"></path>
                        </svg>
                        {{ \Carbon\Carbon::parse($article->upload_date)->format('d M Y') }}
                    </div>

                    <!-- Article Content -->
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                            {{ $article->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gradient overlay -->
        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-indigo-100/80 via-white/60 to-transparent"></div>
    </section>

    <!-- Footer -->
    <section class="bg-white border-t border-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <img src="{{ asset('assets/logo.png') }}" alt="Kangru Logo" class="h-10">
                    <p class="text-gray-600 text-sm">Mulailah Perjalanan Karir Anda bersama <span
                            class="font-semibold">Kangru</span></p>
                </div>
                <div>
                    <h3 class="text-gray-900 font-semibold mb-4">Product</h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li><a href="{{ url('/') }}" class="hover:text-indigo-600">Beranda</a></li>
                        <li><a href="{{ route('article.index') }}" class="hover:text-indigo-600">Artikel</a></li>
                        <li><a href="{{ route('mbti_test') }}" class="hover:text-indigo-600">Tes Minat Bakat</a></li>
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
                        <li><a href="https://github.com/rafidhp/kangru" target="_blank"
                                class="hover:text-indigo-600">Github</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="mt-8 border-t border-gray-200 pt-6 flex flex-col md:flex-row items-center justify-between text-gray-500 text-xs">
                <p>© 2025 Kangru Software Inc.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="https://github.com/rafidhp/kangru" target="_blank"
                        class="hover:text-indigo-600">Support</a>
                    <a href="#" class="hover:text-indigo-600">Privacy policy</a>
                    <a href="#" class="hover:text-indigo-600">Terms of Use</a>
                    <a href="#" class="hover:text-indigo-600">Cookie Policy</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
