<!DOCTYPE html>
<html lang="id">

<head>
<<<<<<< HEAD

=======
>>>>>>> 8f25d6239fa34d713147e02d6376454a83ba16b9
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Kangru - Mulailah Perjalanan Karir Anda</title>
<<<<<<< HEAD

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kangru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="text-gray-800">

    <!-- Navbar -->
    <header x-data="{ open: false }" class="flex justify-between items-center px-6 md:px-12 py-4 border border-black rounded-lg bg-white/60 backdrop-blur-md fixed top-0 left-0 w-full z-50">
=======
</head>

<body class="text-gray-800">
    <!-- Navbar -->
    <header
        class="flex justify-between items-center px-6 md:px-12 py-4 border border-black rounded-lg bg-white/60 backdrop-blur-md fixed top-0 left-0 w-full z-50">
>>>>>>> 8f25d6239fa34d713147e02d6376454a83ba16b9
        <div class="flex items-center space-x-2">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-8">
            <span class="font-semibold">Kangru</span>
        </div>
<<<<<<< HEAD
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
            <a href="{{ url('/mbti-test') }}" class="block px-4 py-2 md:flex md:flex-col md:items-center {{ request()->is('tes-kepribadian') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">
            Tes Kepribadian
            @if(request()->is('tes-kepribadian'))
                <span class="block w-6 h-1 bg-indigo-600 rounded mt-1"></span>
            @endif
=======
        <nav class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}"
                class="flex flex-col items-center {{ request()->is('/') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">
                Beranda
                @if (request()->is('/'))
                    <span class="block w-6 h-1 bg-indigo-600 rounded mt-1"></span>
                @endif
            </a>
            <a href="{{ url('/article') }}"
                class="flex flex-col items-center {{ request()->is('article') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">
                Artikel
                @if (request()->is('article'))
                    <span class="block w-6 h-1 bg-indigo-600 rounded mt-1"></span>
                @endif
            </a>
            <a href="{{ url('/tes-kepribadian') }}"
                class="flex flex-col items-center {{ request()->is('tes-kepribadian') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">
                Tes Kepribadian
                @if (request()->is('tes-kepribadian'))
                    <span class="block w-6 h-1 bg-indigo-600 rounded mt-1"></span>
                @endif
>>>>>>> 8f25d6239fa34d713147e02d6376454a83ba16b9
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
<<<<<<< HEAD
        <button @click="open = !open" class="md:hidden text-indigo-600 focus:outline-none" aria-label="Toggle menu">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
=======
        <button
            class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-3 rounded-lg mb-0 transition-transform duration-200 hover:scale-105">Masuk</button>
>>>>>>> 8f25d6239fa34d713147e02d6376454a83ba16b9
    </header>
    <div class="h-20 md:h-20"></div>

    <!-- Hero -->
    <section class="relative py-12 md:py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center md:items-start justify-center gap-8 px-4 md:px-0">
            <!-- Kiri: Keterangan & Tombol -->
            <div
                class="flex-1 flex flex-col items-start md:items-start justify-center md:justify-center md:pr-8 order-2 md:order-1 w-full md:w-1/2">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 text-left md:text-left">
                    Mulailah Perjalanan Karir Anda bersama <span class="text-indigo-600">Kangru</span>
                </h1>
                <p class="max-w-md mb-6 text-gray-600 text-left">
                    Dapatkan bimbingan karir berbasis AI yang dipersonalisasi, analisis kepribadian MBTI, dan mentoring
                    profesional untuk sukses di jalur Bekerja, Melanjutkan Studi, atau Wirausaha.
                </p>
                <button
                    class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-3 rounded-lg mb-0 transition-transform duration-200 hover:scale-105">
                    Mulai Sekarang!
                </button>
            </div>
            <!-- Tengah: Asset HP -->
            <div class="flex-1 flex flex-col items-center order-1 md:order-2 w-full md:w-1/2">
                <img src="{{ asset('assets/mockup.png') }}" alt="Mockup" class="w-full max-w-xs md:max-w-md mb-6">
                <!-- Logo Integrasi -->
                <div class="flex flex-wrap justify-center items-center gap-6 mt-2">
                    <img src="{{ asset('assets/linkedin.png') }}" class="h-20 w-20 object-contain" alt="LinkedIn">
                    <img src="{{ asset('assets/discord.png') }}" class="h-20 w-20 object-contain" alt="Discord">
                    <img src="{{ asset('assets/zoom.png') }}" class="h-20 w-20 object-contain" alt="Zoom">
                    <img src="{{ asset('assets/meet.png') }}" class="h-20 w-20 object-contain" alt="Google Meet">
                </div>
            </div>
        </div>
        <!-- Gradient indigo bawah ke atas -->
        <div
            class="pointer-events-none absolute inset-x-0 bottom-0 h-32 md:h-40 bg-gradient-to-t from-indigo-200/80 via-indigo-300/40 to-transparent">
        </div>
    </section>

    <!-- Kenali Potensimu -->
    <section class="max-w-6xl mx-auto px-4 md:px-0 py-20 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-bold mb-4 text-indigo-700">Kenali Potensimu, Wujudkan Mimpimu!</h2>
            <p class="mb-6 text-gray-600 text-lg leading-relaxed">
                Lebih dari sekadar aplikasi karir. Dengan AI dan MBTI, Kangru memberikan rekomendasi rencana pribadi
                sesuai minat, bakat, dan impianmu: Bekerja, Studi, atau Wirausaha.
            </p>
            <ul class="space-y-2 text-gray-700">
                <li class="flex items-center">
                    <span class="inline-block w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    Rekomendasi jalur karir berbasis minat & kepribadian
                </li>
                <li class="flex items-center">
                    <span class="inline-block w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    Analisis MBTI untuk pengembangan diri
                </li>
                <li class="flex items-center">
                    <span class="inline-block w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    Materi bimbingan karir lengkap
                </li>
            </ul>
        </div>
        <div class="bg-white/80 shadow-xl rounded-2xl p-8 flex flex-col items-center">
            <h3 class="font-semibold text-lg mb-3 text-indigo-600">Integrasi Platform</h3>
            <p class="mb-6 text-gray-500 text-center">Kangru terhubung dengan aplikasi populer untuk mendukung
                perjalanan karirmu.</p>
            <div class="flex gap-6 justify-center">
                <div class="bg-gray-50 rounded-xl shadow p-3 flex items-center justify-center h-20 w-20">
                    <img src="{{ asset('assets/linkedin.png') }}" class="h-12 w-12 object-contain" alt="LinkedIn">
                </div>
                <div class="bg-gray-50 rounded-xl shadow p-3 flex items-center justify-center h-20 w-20">
                    <img src="{{ asset('assets/discord.png') }}" class="h-12 w-12 object-contain" alt="Discord">
                </div>
                <div class="bg-gray-50 rounded-xl shadow p-3 flex items-center justify-center h-20 w-20">
                    <img src="{{ asset('assets/zoom.png') }}" class="h-12 w-12 object-contain" alt="Zoom">
                </div>
                <div class="bg-gray-50 rounded-xl shadow p-3 flex items-center justify-center h-20 w-20">
                    <img src="{{ asset('assets/meet.png') }}" class="h-12 w-12 object-contain" alt="Google Meet">
                </div>
            </div>
        </div>
        <!-- Card Pengguna Aktif -->
        <div class="md:col-start-2 flex items-center justify-center -mt-8">
            <div
                class="relative bg-indigo-600 rounded-2xl shadow-xl p-8 flex flex-col items-center text-white overflow-hidden w-full">
                <span class="absolute -top-6 -left-6 w-20 h-20 bg-indigo-400/30 rounded-full blur-2xl"></span>
                <span class="absolute -bottom-8 -right-8 w-32 h-32 bg-white/10 rounded-full blur-2xl"></span>
                <div class="flex flex-col items-center z-10">
                    <span class="text-4xl md:text-110px font-extrabold mb-2 drop-shadow-lg">500k+</span>
                    <span class="text-lg md:text-xl font-medium text-indigo-100 text-center">pengguna aktif di seluruh
                        dunia</span>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Jalur Karir -->
    <section class="relative py-20 bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-5xl mx-auto text-center px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-indigo-700">Temukan Jalur Karir Terbaik untuk Masa
                Depanmu</h2>
            <p class="mb-8 text-gray-600 text-lg">Kangru memberikan panduan terarah untuk membantu kamu memilih dan
                sukses di jalur karir yang paling cocok. Apakah kamu ingin langsung bekerja, melanjutkan studi, atau
                membangun bisnis, kami hadir untuk mendukung setiap langkahmu.</p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <div
                    class="flex-1 bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-200 border-2 border-transparent hover:border-indigo-200">
                    <div class="bg-indigo-100 rounded-full p-4 mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 3.13a4 4 0 010 7.75M8 3.13a4 4 0 000 7.75" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-xl mb-2 text-indigo-700">Bekerja</h3>
                    <p class="text-gray-500 mb-4">Dapatkan rekomendasi pekerjaan, tips CV, dan simulasi interview dari
                        para ahli.</p>
                    <button
                        class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-2 rounded-lg font-medium transition">Pilih
                        Jalur Ini</button>
                </div>
                <div
                    class="flex-1 bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-200 border-2 border-transparent hover:border-indigo-200">
                    <div class="bg-indigo-100 rounded-full p-4 mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M12 14l9-5-9-5-9 5 9 5zm0 7v-6m0 0l-7-4m7 4l7-4" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-xl mb-2 text-indigo-700">Melanjutkan Studi</h3>
                    <p class="text-gray-500 mb-4">Temukan kampus dan jurusan terbaik, serta tips beasiswa dan persiapan
                        studi lanjut.</p>
                    <button
                        class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-2 rounded-lg font-medium transition">Pilih
                        Jalur Ini</button>
                </div>
                <div
                    class="flex-1 bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-200 border-2 border-transparent hover:border-indigo-200">
                    <div class="bg-indigo-100 rounded-full p-4 mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M20 21v-2a4 4 0 00-3-3.87M4 21v-2a4 4 0 013-3.87M12 7V3m0 0L8.5 7.5M12 3l3.5 4.5" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-xl mb-2 text-indigo-700">Wirausaha</h3>
                    <p class="text-gray-500 mb-4">Dapatkan inspirasi bisnis, panduan memulai usaha, dan mentoring dari
                        entrepreneur sukses.</p>
                    <button
                        class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-2 rounded-lg font-medium transition">Pilih
                        Jalur Ini</button>
                </div>
            </div>
        </div>
        <div
            class="pointer-events-none absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-indigo-100/80 via-white/60 to-transparent">
        </div>
    </section>

    <!-- Mentor -->
    <section class="max-w-6xl mx-auto py-16 px-4">
        <h2 class="text-center text-2xl font-semibold mb-10">Pilih Mentor Terbaik untuk Meraih Mimpimu</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:shadow-xl transition">
                <img src="{{ asset('assets/Sultang.png') }}"
                    class="mb-4 rounded-full h-24 w-24 object-cover border-4 border-indigo-100 shadow">
                <p class="font-semibold text-lg text-indigo-700">Sultan Badra</p>
                <span class="text-gray-500 text-sm mt-1">Cyber Security - Politeknik Negeri Cilacap</span>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:shadow-xl transition">
                <img src="{{ asset('assets/aper.png') }}"
                    class="mb-4 rounded-full h-24 w-24 object-cover border-4 border-indigo-100 shadow">
                <p class="font-semibold text-lg text-indigo-700">Afera Nurfariah</p>
                <span class="text-gray-500 text-sm mt-1">Cafe Seblak Aper</span>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:shadow-xl transition">
                <img src="{{ asset('assets/pagun.png') }}"
                    class="mb-4 rounded-full h-24 w-24 object-cover border-4 border-indigo-100 shadow">
                <p class="font-semibold text-lg text-indigo-700">Gunawan Busyaeri</p>
                <span class="text-gray-500 text-sm mt-1">Caravan Studios</span>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:shadow-xl transition">
                <img src="{{ asset('assets/nanda.png') }}"
                    class="mb-4 rounded-full h-24 w-24 object-cover border-4 border-indigo-100 shadow">
                <p class="font-semibold text-lg text-indigo-700">Nanda Rizki</p>
                <span class="text-gray-500 text-sm mt-1">PT. Yamaha Motor</span>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="bg-indigo-50 py-20">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-center text-4xl font-extrabold mb-12 text-indigo-800 tracking-wide drop-shadow-md">Apa kata
                lulusan</h2>
            <div class="grid md:grid-cols-2 gap-16 items-start">
                <!-- Testimoni 1 -->
                <div
                    class="flex flex-col items-center text-center bg-white rounded-3xl shadow-2xl p-8 hover:shadow-indigo-400 transition-shadow duration-300">
                    <img src="{{ asset('assets/rafi.png') }}" alt="Malika Lathifa"
                        class="mb-6 rounded-full h-28 w-28 object-cover border-4 border-indigo-200 shadow-lg">
                    <span class="text-2xl font-bold text-indigo-700 mb-3">Rafi Islami</span>
                    <div class="flex items-center justify-center mb-4">
                        <span class="font-semibold text-gray-900 mr-3">Penilaian:</span>
                        <span class="flex text-yellow-400 text-xl">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                                    <polygon
                                        points="10,1 12.59,7.36 19.51,7.36 13.97,11.64 16.56,18 10,13.72 3.44,18 6.03,11.64 0.49,7.36 7.41,7.36" />
                                </svg>
                            @endfor
                        </span>
                    </div>
                    <p class="text-gray-800 leading-relaxed text-lg font-medium">
                        "Kangru benar-benar membantu saya memahami potensi diri dan menentukan pilihan karir yang tepat.
                        Dengan fitur-fiturnya yang interaktif dan informatif, saya bisa mengeksplorasi berbagai peluang
                        kerja yang sesuai dengan minat dan kemampuan saya. Aplikasi ini seperti teman yang selalu siap
                        memberikan panduan dan motivasi untuk mencapai tujuan karir saya. Sangat direkomendasikan untuk
                        siapa saja yang masih bingung menentukan arah masa depan mereka!"
                    </p>
                </div>
                <!-- Testimoni 2 -->
                <div
                    class="flex flex-col items-center text-center bg-white rounded-3xl shadow-2xl p-8 hover:shadow-indigo-400 transition-shadow duration-300">
                    <img src="{{ asset('assets/ipul.png') }}" alt="Charlotte Isabella"
                        class="mb-6 rounded-full h-28 w-28 object-cover border-4 border-indigo-200 shadow-lg">
                    <span class="text-2xl font-bold text-indigo-700 mb-3">Saifulloh Fattah</span>
                    <div class="flex items-center justify-center mb-4">
                        <span class="font-semibold text-gray-900 mr-3">Penilaian:</span>
                        <span class="flex text-yellow-400 text-xl">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                                    <polygon
                                        points="10,1 12.59,7.36 19.51,7.36 13.97,11.64 16.56,18 10,13.72 3.44,18 6.03,11.64 0.49,7.36 7.41,7.36" />
                                </svg>
                            @endfor
                        </span>
                    </div>
                    <p class="text-gray-800 leading-relaxed text-lg font-medium">
                        "Saya sangat terbantu dengan Kangru! Aplikasi ini memberikan wawasan yang jelas tentang berbagai
                        jalur karir yang cocok dengan kepribadian dan keterampilan saya. Panduannya mudah dipahami, dan
                        saya merasa lebih percaya diri dalam mengambil langkah menuju masa depan. Rasanya seperti punya
                        mentor pribadi dengan genggaman. Sungguh solusi yang luar biasa bagi mereka yang ingin membangun
                        karir dengan arah yang jelas!"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="max-w-4xl mx-auto py-16 px-4" x-data="{ openIndex: null }">
        <h2 class="text-center text-2xl font-semibold mb-8">Pertanyaan yang Sering Diajukan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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

    <!-- Credit Section -->
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
                        <li><a href="{{ url('/artikel') }}" class="hover:text-indigo-600">Artikel</a></li>
                        <li><a href="{{ url('/tes-kepribadian') }}" class="hover:text-indigo-600">Tes Minat Bakat</a>
                        </li>
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
            <div
                class="mt-8 border-t border-gray-200 pt-6 flex flex-col md:flex-row items-center justify-between text-gray-500 text-xs">
                <p>© 2025 Kangru Software Inc.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" aria-label="GitHub" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.004.07 1.532 1.032 1.532 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.923.678 1.861 0 1.343-.012 2.425-.012 2.754 0 .268.18.58.688.482A10.02 10.02 0 0022 12.017C22 6.484 17.523 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 11.268h-3v-5.604c0-1.337-.026-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.967v5.7h-3v-10h2.881v1.367h.041c.401-.761 1.379-1.562 2.838-1.562 3.036 0 3.6 2 3.6 4.59v5.605z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Facebook" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.325v21.351c0 .732.592 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.466.099 2.797.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.312h3.59l-.467 3.622h-3.123v9.293h6.116c.732 0 1.324-.592 1.324-1.324v-21.35c0-.733-.592-1.325-1.324-1.325z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.865 9.865 0 01-3.127 1.195 4.916 4.916 0 00-8.38 4.482 13.94 13.94 0 01-10.11-5.13 4.822 4.822 0 001.523 6.574 4.903 4.903 0 01-2.228-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.923 4.923 0 004.6 3.417 9.867 9.867 0 01-6.102 2.105c-.396 0-.787-.023-1.17-.067a13.945 13.945 0 007.557 2.212c9.054 0 14.002-7.496 14.002-13.986 0-.21 0-.423-.015-.633a9.936 9.936 0 002.457-2.548l-.047-.02z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="hover:text-indigo-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm4.75-.88a1.12 1.12 0 11-2.24 0 1.12 1.12 0 012.24 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
<<<<<<< HEAD

<body>
    @if (Auth::check())
        <h1 class="text-[#999000]">hello world {{ Auth::user()->name }}!</h1>
        <a href="{{ route('mbti_test') }}">MBTI Test</a>
        <br><br>
        <a href="{{ route('auth.logout') }}">Logout</a>
    @else
        <h1 class="text-[#999000]">hello world!</h1>
        <br>
        <a href="{{ route('auth.login') }}">Login</a>
    @endif
</body>
=======
>>>>>>> 8f25d6239fa34d713147e02d6376454a83ba16b9

</html>
