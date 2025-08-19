<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel - Kangru</title>
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

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body class="text-gray-800">
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
                    class="flex flex-col items-center text-sm md:text-base transition {{ request()->is('article') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }} py-2 md:py-0">
                    Artikel
                    @if (request()->is('article'))
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

    <!-- Hero Section -->
    <section class="relative py-12 md:py-20 bg-gradient-to-b from-white to-indigo-50 overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-indigo-200/30 rounded-full blur-xl"></div>
        <div class="absolute top-32 right-16 w-16 h-16 bg-blue-200/40 rounded-full blur-lg"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-purple-200/30 rounded-full blur-md"></div>
        <div class="absolute top-1/2 right-8 w-8 h-8 bg-indigo-300/50 rounded-full blur-sm"></div>

        <div class="max-w-6xl mx-auto flex flex-col items-center justify-center text-center px-4 relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">
                Jadilah Versi Terbaik dari <br>Dirimu Bersama <span class="text-indigo-600">Kangru</span>
            </h1>
            <div class="mt-8 relative">
                <!-- Floating icons around the main image -->
                <div
                    class="absolute -top-4 -left-4 w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center animate-bounce">
                    <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div
                    class="absolute -top-2 -right-6 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center animate-pulse">
                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <div class="absolute -bottom-3 -left-2 w-7 h-7 bg-purple-100 rounded-lg flex items-center justify-center animate-bounce"
                    style="animation-delay: 0.5s">
                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <img src="{{ asset('assets/article/artikel_dashboard.png') }}" alt="Mockup"
                    class="w-80 md:w-96 mx-auto">
            </div>
        </div>
        <div
            class="pointer-events-none absolute inset-x-0 bottom-0 h-32 md:h-40 bg-gradient-to-t from-indigo-200/80 via-indigo-300/40 to-transparent">
        </div>
    </section>

    @if (session('success'))
        <div class="max-w-6xl mx-auto px-4 mb-6">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Artikel Terbaru Section -->
    @if ($articles->count() > 0)
        <section class="max-w-6xl mx-auto px-4 py-12">
            @php $latestArticle = $articles->sortByDesc('upload_date')->first(); @endphp
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-sm font-medium mr-4">Artikel
                        Terbaru</span>
                    <h2 class="text-xl font-semibold">{{ $latestArticle->title }}</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        @if ($latestArticle->image != null)
                            <img src="{{ asset('storage/article/' . $latestArticle->hashid . '_' . $latestArticle->image) }}"
                                alt="{{ $latestArticle->title }}" class="w-full h-64 object-cover rounded-lg">
                        @else
                            <img src="{{ asset('storage/article/article_template.jpg') }}"
                                alt="{{ $latestArticle->title }}" class="w-full h-64 object-cover rounded-lg">
                        @endif
                    </div>
                    <div>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            {{ Str::limit($latestArticle->content, 200) }}
                        </p>
                        <a href="{{ route('article.show', $latestArticle->hashid) }}"
                            class="inline-flex items-center text-indigo-600 hover:text-indigo-500 font-medium">
                            Baca Lebih Lanjut
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Bekerja Section -->
    @if ($bekerja_articles->count() > 0)
        <section id="bekerja" class="max-w-6xl mx-auto px-4 py-12">
            <h2 class="text-2xl font-bold mb-8">Bekerja</h2>
            <p class="text-gray-600 mb-8">Tetap Terinformasi dengan Wawasan Terbaru Kami</p>
            <div class="grid md:grid-cols-4 gap-6">
                @foreach ($bekerja_articles->take(4) as $article)
                    <a href="{{ route('article.show', $article->hashid) }}" class="block">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
                            @if ($article->image != null)
                                <img src="{{ asset('storage/article/' . $article->hashid . '_' . $article->image) }}"
                                    alt="{{ $article->title }}" class="w-full h-48 object-cover">
                            @else
                                <img src="{{ asset('storage/article/article_template.jpg') }}"
                                    alt="{{ $article->title }}" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2 line-clamp-2">{{ $article->title }}</h3>
                                <p class="text-gray-600 text-sm mb-3 line-clamp-3">
                                    {{ Str::limit($article->content, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                                        Selengkapnya</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    <!-- Melanjutkan Studi Section -->
    @if ($kuliah_articles->count() > 0)
        <section id="study" class="max-w-6xl mx-auto px-4 py-12">
            <h2 class="text-2xl font-bold mb-8">Melanjutkan Studi</h2>
            <p class="text-gray-600 mb-8">Tetap Terinformasi dengan Wawasan Terbaru Kami</p>
            <div class="grid md:grid-cols-4 gap-6">
                @foreach ($kuliah_articles->take(4) as $article)
                    <a href="{{ route('article.show', $article->hashid) }}" class="block">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
                            @if ($article->image != null)
                                <img src="{{ asset('storage/article/' . $article->hashid . '_' . $article->image) }}"
                                    alt="{{ $article->title }}" class="w-full h-48 object-cover">
                            @else
                                <img src="{{ asset('storage/article/article_template.jpg') }}"
                                    alt="{{ $article->title }}" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2 line-clamp-2">{{ $article->title }}</h3>
                                <p class="text-gray-600 text-sm mb-3 line-clamp-3">
                                    {{ Str::limit($article->content, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                                        Selengkapnya</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    <!-- Wirausaha Section -->
    @if ($wirausaha_articles->count() > 0)
        <section id="wirausaha" class="max-w-6xl mx-auto px-4 py-12">
            <h2 class="text-2xl font-bold mb-8">Wirausaha</h2>
            <p class="text-gray-600 mb-8">Tetap Terinformasi dengan Wawasan Terbaru Kami</p>
            <div class="grid md:grid-cols-4 gap-6">
                @foreach ($wirausaha_articles->take(4) as $article)
                    <a href="{{ route('article.show', $article->hashid) }}" class="block">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
                            @if ($article->image != null)
                                <img src="{{ asset('storage/article/' . $article->hashid . '_' . $article->image) }}"
                                    alt="{{ $article->title }}" class="w-full h-48 object-cover">
                            @else
                                <img src="{{ asset('storage/article/article_template.jpg') }}"
                                    alt="{{ $article->title }}" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2 line-clamp-2">{{ $article->title }}</h3>
                                <p class="text-gray-600 text-sm mb-3 line-clamp-3">
                                    {{ Str::limit($article->content, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                                        Selengkapnya</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    @if ($articles->count() == 0)
        <section class="max-w-6xl mx-auto px-4 py-12">
            <div class="text-center">
                <h2 class="text-2xl font-bold mb-4">Belum Ada Artikel</h2>
                <p class="text-gray-600">Artikel akan segera hadir. Silakan kembali lagi nanti.</p>
            </div>
        </section>
    @endif



    <!-- FAQ Section -->
    <section id="faq" class="max-w-4xl mx-auto py-12 md:py-16 px-4" x-data="{ openIndex: null }">
        <h2 class="text-center text-xl md:text-2xl font-semibold mb-6 md:mb-8">Pertanyaan yang Sering Diajukan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
            <template
                x-for="(faq, index) in [
                { question: 'Apa itu Kangru?', answer: 'Kangru adalah platform bimbingan karir berbasis AI dan MBTI.' },
                { question: 'Apakah Kangru gratis digunakan?', answer: 'Tersedia versi gratis dan premium sesuai kebutuhanmu.' },
                { question: 'Apakah data saya aman di Kangru?', answer: 'Data Anda dijaga kerahasiaannya dengan standar keamanan tinggi.' },
                { question: 'Bagaimana saya memulai menggunakan Kangru?', answer: 'Daftar akun dan mulai jelajahi fitur bimbingan karir kami.' },
                { question: 'Bagaimana Kangru membantu saya menentukan karir?', answer: 'Kangru memberikan rekomendasi karir yang dipersonalisasi berdasarkan analisis kepribadian dan minat Anda.' },
                { question: 'Apakah Kangru hanya untuk karir tertentu saja?', answer: 'Kangru cocok untuk berbagai jalur karir, baik bekerja, studi, maupun wirausaha.' }
            ]"
                :key="index">
                <div class="border rounded-lg p-4 cursor-pointer select-none hover:shadow-lg transition-shadow duration-300"
                    @click="openIndex === index ? openIndex = null : openIndex = index">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-800" x-text="faq.question"></h3>
                        <button class="text-indigo-600 font-bold text-xl leading-none focus:outline-none"
                            :aria-expanded="openIndex === index" :aria-controls="'faq-answer-' + index" type="button"
                            @click.stop="openIndex === index ? openIndex = null : openIndex = index"
                            x-text="openIndex === index ? '-' : '+'"></button>
                    </div>
                    <div class="mt-2 text-gray-600" x-show="openIndex === index" x-transition
                        x-bind:id="'faq-answer-' + index" x-cloak x-text="faq.answer"></div>
                </div>
            </template>
        </div>
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
