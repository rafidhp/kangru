<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $ad->title }} - Kangru</title>

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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    Kembali
                </a>
            </div>

            <!-- Article Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Article Image -->
                <div class="relative">
                    <img src="{{ asset('storage/advertisement/' . $ad->hashid . '_' . $ad->image) }}"
                        alt="{{ $ad->title }}" class="w-full h-64 md:h-80 object-cover">

                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ $ad->category->category_name }}
                        </span>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="p-6 md:p-8">
                    <!-- Article Title -->
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                        {{ $ad->title }}
                    </h1>

                    <!-- Article Meta -->
                    <div class="flex items-center text-gray-500 text-sm mb-6">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4m-6 0h6m-6 0a1 1 0 00-1 1v10a1 1 0 001 1h6a1 1 0 001-1V8a1 1 0 00-1-1">
                            </path>
                        </svg>
                        {{ \Carbon\Carbon::parse($ad->upload_date)->format('d M Y') }}
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                            {{ $ad->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gradient overlay -->
        <div
            class="pointer-events-none absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-indigo-100/80 via-white/60 to-transparent">
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
{{-- <h2>View Ad</h2>

<table>
    <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Description</th>
        <th>Category</th>
    </tr>
    <tr>
        <td>{{ $ad->title }}</td>
        <td>
            <img src="{{ asset('storage/advertisement/' . $ad->hashid . '_' . $ad->image) }}" alt="advertisement image"
                style="width: 150px">
        </td>
        <td>{{ $ad->description }}</td>
        <td>{{ $ad->category->category_name }}</td>
    </tr>
</table>

<br>
<a href="{{ url()->previous() }}">Kembali</a> --}}
