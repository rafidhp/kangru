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
    <section class="max-w-6xl mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <div class="flex items-center mb-6">
                <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-sm font-medium mr-4">Artikel
                    Terbaru</span>
                <h2 class="text-xl font-semibold">Bagaimana memilih Universitas yang tepat ?</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="{{ asset('assets/article/artikel_terbaru.png') }}" alt="Article Image"
                        class="w-full h-64 object-cover rounded-lg">
                </div>
                <div>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Memilih universitas adalah keputusan penting yang memerlukan pertimbangan matang. Artikel ini
                        membahas faktor-faktor penting yang perlu dipertimbangkan seperti akreditasi, fasilitas, biaya
                        kuliah, dan prospek karir lulusan.
                    </p>
                    <a href="#"
                        class="inline-flex items-center text-indigo-600 hover:text-indigo-500 font-medium">
                        Baca Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bekerja Section -->
    <section id="bekerja" class="max-w-6xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-8">Bekerja</h2>
        <p class="text-gray-600 mb-8">Tetap Terinformasi dengan Wawasan Terbaru Kami</p>
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_bekerja1.png') }}"
                    alt="Tips Pelaporan Jasa Keterampilan Digital dan Prestasi Usaha"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Tips Pelaporan Jasa Keterampilan Digital dan Prestasi Usaha
                    </h3>
                    <p class="text-gray-600 text-sm mb-3">Dalam era digital saat ini, banyak peluang untuk
                        mengembangkan keterampilan digital dan membangun prestasi usaha...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_bekerja2.png') }}"
                    alt="Tips Sukses Negosiasi Gaji untuk Fresh Graduate" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Tips Sukses Negosiasi Gaji untuk Fresh Graduate</h3>
                    <p class="text-gray-600 text-sm mb-3">Negosiasi gaji merupakan skill penting yang harus dikuasai
                        oleh fresh graduate...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_bekerja3.png') }}"
                    alt="Industri Kreatif Peluang Besar bagi Generasi Milenial" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Industri Kreatif Peluang Besar bagi Generasi Milenial</h3>
                    <p class="text-gray-600 text-sm mb-3">Industri kreatif menawarkan peluang besar bagi generasi
                        milenial untuk mengembangkan karir...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_bekerja4.png') }}"
                    alt="Pelatihan Hybrid Solusi Baru bagi Karyawan Masa Kini Hidup" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Pelatihan Hybrid Solusi Baru bagi Karyawan Masa Kini Hidup
                    </h3>
                    <p class="text-gray-600 text-sm mb-3">Pelatihan hybrid menjadi solusi inovatif untuk pengembangan
                        karyawan di era modern...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Melanjutkan Studi Section -->
    <section id="study" class="max-w-6xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-8">Melanjutkan Studi</h2>
        <p class="text-gray-600 mb-8">Tetap Terinformasi dengan Wawasan Terbaru Kami</p>
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_studi1.png') }}"
                    alt="Bagaimana Memilih Jurusan Wajib di Universitas" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Bagaimana Memilih Jurusan Wajib di Universitas</h3>
                    <p class="text-gray-600 text-sm mb-3">Memilih jurusan yang tepat adalah keputusan penting dalam
                        hidup. Artikel ini memberikan panduan lengkap...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_studi2.png') }}"
                    alt="Mengenal Teknologi Curriculum & Assessment" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Mengenal Teknologi Curriculum & Assessment</h3>
                    <p class="text-gray-600 text-sm mb-3">Teknologi dalam pendidikan terus berkembang. Pelajari
                        bagaimana curriculum dan assessment modern...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_studi3.png') }}"
                    alt="S-2 Cara Menyiapkan Passion untuk Akademik" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">S-2 Cara Menyiapkan Passion untuk Akademik</h3>
                    <p class="text-gray-600 text-sm mb-3">Melanjutkan studi S-2 membutuhkan persiapan yang matang.
                        Temukan cara untuk menyiapkan passion...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_studi4.png') }}" alt="Kuliah Masuk Kuliah di UGM"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Kuliah Masuk Kuliah di UGM</h3>
                    <p class="text-gray-600 text-sm mb-3">UGM merupakan salah satu universitas terbaik di Indonesia.
                        Pelajari tips dan strategi untuk bisa diterima...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wirausaha Section -->
    <section id="wirausaha" class="max-w-6xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-8">Wirausaha</h2>
        <p class="text-gray-600 mb-8">Tetap Terinformasi dengan Wawasan Terbaru Kami</p>
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_wirausaha1.png') }}"
                    alt="Strategi Pemasaran Digital untuk UMKM" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Strategi Pemasaran Digital untuk UMKM</h3>
                    <p class="text-gray-600 text-sm mb-3">Pemasaran digital menjadi kunci sukses UMKM di era modern.
                        Pelajari strategi-strategi efektif...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_wirausaha2.png') }}"
                    alt="Mengelola Pemerintahan Crowdfunding untuk Startup" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Mengelola Pemerintahan Crowdfunding untuk Startup</h3>
                    <p class="text-gray-600 text-sm mb-3">Crowdfunding menjadi alternatif pendanaan yang populer untuk
                        startup. Pelajari cara mengelola kampanye...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_wirausaha3.png') }}"
                    alt="5 Kesalahan Umum yang Harus Dihindari" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">5 Kesalahan Umum yang Harus Dihindari</h3>
                    <p class="text-gray-600 text-sm mb-3">Dalam memulai bisnis, ada beberapa kesalahan umum yang sering
                        dilakukan entrepreneur pemula...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('assets/article/artikel_wirausaha4.png') }}"
                    alt="Pentingnya Branding bagi Bisnis Kecil" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Pentingnya Branding bagi Bisnis Kecil</h3>
                    <p class="text-gray-600 text-sm mb-3">Branding bukan hanya untuk perusahaan besar. Bisnis kecil
                        juga membutuhkan branding yang kuat...</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-indigo-50 py-16">
        <div class="max-w-4xl mx-auto px-4">
            <div class="flex items-center mb-8">
                <img src="{{ asset('assets/article/pertanyaan_artikel.png') }}" alt="FAQ Image"
                    class="w-32 h-32 object-cover rounded-lg mr-8">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Pertanyaan yang Sering Diajukan</h2>
                </div>
            </div>
            <div class="space-y-4" x-data="{ openIndex: null }">
                @php
                    $faqs = [
                        [
                            'question' => 'Apa itu Kangru?',
                            'answer' => 'Kangru adalah platform bimbingan karir berbasis AI dan MBTI.',
                        ],
                        [
                            'question' => 'Apakah Kangru gratis digunakan?',
                            'answer' => 'Tersedia versi gratis dan premium sesuai kebutuhanmu.',
                        ],
                        [
                            'question' => 'Apakah data saya aman di Kangru?',
                            'answer' => 'Data Anda dijaga kerahasiaannya dengan standar keamanan tinggi.',
                        ],
                        [
                            'question' => 'Bagaimana saya memulai menggunakan Kangru?',
                            'answer' => 'Daftar akun dan mulai jelajahi fitur bimbingan karir kami.',
                        ],
                        [
                            'question' => 'Bagaimana saya Kangru membantu saya menentukan karir?',
                            'answer' =>
                                'Kangru memberikan rekomendasi karir yang dipersonalisasi berdasarkan analisis kepribadian dan minat Anda.',
                        ],
                        [
                            'question' => 'Apakah Kangru hanya untuk karir tertentu saja?',
                            'answer' =>
                                'Kangru cocok untuk berbagai jalur karir, baik bekerja, studi, maupun wirausaha.',
                        ],
                    ];
                @endphp
                @foreach ($faqs as $index => $faq)
                    <div class="border rounded-lg p-4 cursor-pointer bg-white hover:shadow-lg transition-shadow"
                        @click="openIndex === {{ $index }} ? openIndex = null : openIndex = {{ $index }}">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-gray-800">{{ $faq['question'] }}</h3>
                            <button class="text-indigo-600 font-bold text-xl focus:outline-none"
                                x-text="openIndex === {{ $index }} ? '-' : '+'"></button>
                        </div>
                        <div class="mt-2 text-gray-600" x-show="openIndex === {{ $index }}" x-transition>
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                @endforeach
            </div>
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
