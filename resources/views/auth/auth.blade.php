<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
    /* subtle wavy pattern background on white form side */
    .wavy-bg {
        background: repeating-radial-gradient(circle at 50% 50%, #fafafa 0, #fafafa 2px, #f0f0f0 2px, #f0f0f0 6px);
        background-size: 60px 60px;
        position: relative;
        overflow: hidden;
    }
    /* subtle overlay wave pattern */
    .wavy-bg::before {
        content: "";
        position: absolute;
        inset: 0;
        background: repeating-linear-gradient(45deg, #fafafa 0, #fafafa 10px, #f5f5f5 10px, #f5f5f5 20px);
        opacity: 0.3;
        pointer-events: none;
    }
    </style>
</head>

<!-- Body with gradient background -->
<body class="min-h-screen bg-gradient-to-r from-indigo-900 via-blue-900 to-blue-800 flex items-center justify-center">
    <div class="w-full max-w-7xl xl:max-w-6xl 2xl:max-w-7xl bg-white/10 rounded-[20px] shadow-2xl flex flex-col-reverse xl:flex-row overflow-hidden mx-4">
        <img
        src="{{ asset('assets/asset1.jpg') }}"
        alt="Smartphone laying flat on a blue gradient background showing a purple mascot cartoon character with text content and a button displayed on screen in a clean modern style"
        class="fixed inset-0 bg-no-repeat bg-center bg-contain -z-10"
        onerror="this.style.display='none'"
        />
    </div>

        <!-- Alpine.js state for toggling login/register -->
        <div x-data="{ showLogin: true }" class="flex items-center justify-center min-h-screen absolute inset-0 z-20">
            <!-- Login Card -->
            <div
                x-show="showLogin"
                x-transition:enter="transition transform duration-500"
                x-transition:enter-start="scale-90 opacity-0"
                x-transition:enter-end="scale-100 opacity-100"
                x-transition:leave="transition transform duration-500"
                x-transition:leave-start="scale-100 opacity-100"
                x-transition:leave-end="scale-100 opacity-0"
                class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8 md:p-10 wavy-bg relative origin-right duration-500"
            >
                <div class="relative z-10">
                    <!-- Logo stylized as the purple kangaroo silhouette -->
                    <svg class="h-10 w-10 mx-auto mb-4" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" >
                        <path d="M22 46c0-14 10-20 19-20" stroke="#4B4A82" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32 26c-6 0-10 4-10 10s4 10 10 10 8-4 8-8-5-12-8-12z" fill="#4B4A82" />
                        <path d="M40 36h8l-10-8z" fill="#4B4A82" />
                    </svg>
                    <h1 class="text-center font-semibold text-2xl md:text-3xl mb-1 text-gray-900 leading-tight">
                        Selamat Datang<br />kembali
                    </h1>
                    <p class="text-center text-sm md:text-base text-gray-600 mb-8">
                        Silakan masukkan detail Anda
                    </p>
                    <form class="space-y-6" action="{{ route('auth.postlogin') }}" method="POST" novalidate>
                        <div>
                            @error('username')
                            <div>{{ $message }}</div>
                            <br>
                            <label for="username" class="block text-sm font-medium text-gray-700">Email</label>
                            <input
                                id="username"
                                name="username"
                                type="username"
                                autocomplete="username"
                                required
                                class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                                placeholder="Isi username anda"
                            />
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="relative">
                                @error('password')
                                <div>{{ $message }}</div>
                                <br>
                                <input
                                    id="password"
                                    name="password"
                                    type="password"
                                    autocomplete="current-password"
                                    required
                                    class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1 pr-10"
                                    placeholder="••••••••"
                                />
                                @enderror
                                <button type="button" aria-label="Toggle password visibility" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 hover:text-indigo-600" onclick="togglePasswordVisibility()">
                                    <svg id="eyeIcon" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"  viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-between items-center text-sm text-gray-700 mb-6">
                            <label class="inline-flex items-center space-x-2">
                                <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                                <span>Ingat selama 30 hari</span>
                            </label>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium">Lupa password?</a>
                        </div>
                        <button type="submit" class="w-full py-3 bg-black text-white rounded-full font-semibold text-lg hover:bg-indigo-900 transition-colors duration-200">
                            Masuk
                        </button>
                            @if (session('success'))
                            <div>{{ session('success') }}</div>
                            <br>
                            @endif
                    </form>
                    <div class="mt-6 text-center">
                        <button
                            type="button"
                            class="inline-flex items-center justify-center gap-2 border border-gray-200 rounded-full px-4 py-2 bg-white hover:bg-gray-50 text-gray-900 font-semibold shadow-sm transition"
                        >
                            <svg class="w-5 h-5" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M533.5 278.4c0-18.6-1.6-37.2-4.8-55.2H272v104.5h146.9c-6.3 33.7-25 62.3-53.3 81.5v67h85.9c50.2-46.3 81.9-114.5 81.9-197.8z" fill="#4285f4"/>
                                <path d="M272 544.3c72.6 0 133.5-24 178-65.1l-85.9-67c-23.8 16-54.2 25-92.1 25-70.8 0-130.8-47.9-152.3-112.1H30.4v70.6C74.2 477 166.8 544.3 272 544.3z" fill="#34a853"/>
                                <path d="M119.7 324.9c-5.6-16.7-8.8-34.5-8.8-52.9s3.2-36.2 8.8-52.9v-70.6H30.4C11 189.2 0 228.2 0 272c0 43.8 11 82.8 30.4 122.4l89.3-69.5z" fill="#fbbc04"/>
                                <path d="M272 107.7c39.5 0 74.8 13.6 102.6 40.3l76.8-76.8C405.5 26.7 344.6 0 272 0 166.8 0 74.2 67.3 30.4 149.6l89.3 70.6C141.2 155.6 201.2 107.7 272 107.7z" fill="#ea4335"/>
                            </svg>
                            Masuk dengan Google
                        </button>
                    </div>
                    <p class="mt-8 text-center text-gray-600 text-sm">
                        Belum punya Akun?
                        <a href="#" @click.prevent="showLogin = false"
                            class="text-indigo-600 hover:text-indigo-700 font-semibold">Buat</a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
            <div
                x-show="!showLogin"
                x-transition:enter="transition transform duration-500"
                x-transition:enter-start="scale-90 opacity-0"
                x-transition:enter-end="scale-100 opacity-100"
                x-transition:leave="transition transform duration-500"
                x-transition:leave-start="scale-100 opacity-100"
                x-transition:leave-end="scale-100 opacity-0"
                class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8 md:p-10 wavy-bg relative origin-left duration-500"
            >
                <div class="relative z-10">
                    <svg class="h-10 w-10 mx-auto mb-4" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" >
                        <path d="M22 46c0-14 10-20 19-20" stroke="#4B4A82" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32 26c-6 0-10 4-10 10s4 10 10 10 8-4 8-8-5-12-8-12z" fill="#4B4A82" />
                        <path d="M40 36h8l-10-8z" fill="#4B4A82" />
                    </svg>
                    <h1 class="text-center font-semibold text-2xl md:text-3xl mb-1 text-gray-900 leading-tight">
                        Daftar Akun Baru
                    </h1>
                    <p class="text-center text-sm md:text-base text-gray-600 mb-8">
                        Silakan isi data untuk mendaftar
                    </p>
                    <form class="space-y-6" action="{{route('auth.postregister')}}" method="post">
                        @csrf
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                            <input
                                id="username"
                                name="username"
                                type="text"
                                required
                                class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                                placeholder="Nama Lengkap"
                            />
                        </div>
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                required
                                class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                                placeholder="Nama Lengkap"
                            />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                autocomplete="email"
                                required
                                class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                                placeholder="example@email.com"
                            />
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="new-password"
                                required
                                class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                                placeholder="••••••••"
                            />
                        </div>
                        <div>
                            <label for="register_password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                            <input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                autocomplete="new-password"
                                required
                                class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                                placeholder="••••••••"
                            />
                        </div>
                        <button type="submit" class="w-full py-3 bg-black text-white rounded-full font-semibold text-lg hover:bg-indigo-900 transition-colors duration-200">
                            Daftar
                        </button>
                    </form>
                    <div class="mt-6 text-center">
                        <button
                            type="button"
                            class="inline-flex items-center justify-center gap-2 border border-gray-200 rounded-full px-4 py-2 bg-white hover:bg-gray-50 text-gray-900 font-semibold shadow-sm transition"
                        >
                            <svg class="w-5 h-5" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M533.5 278.4c0-18.6-1.6-37.2-4.8-55.2H272v104.5h146.9c-6.3 33.7-25 62.3-53.3 81.5v67h85.9c50.2-46.3 81.9-114.5 81.9-197.8z" fill="#4285f4"/>
                                <path d="M272 544.3c72.6 0 133.5-24 178-65.1l-85.9-67c-23.8 16-54.2 25-92.1 25-70.8 0-130.8-47.9-152.3-112.1H30.4v70.6C74.2 477 166.8 544.3 272 544.3z" fill="#34a853"/>
                                <path d="M119.7 324.9c-5.6-16.7-8.8-34.5-8.8-52.9s3.2-36.2 8.8-52.9v-70.6H30.4C11 189.2 0 228.2 0 272c0 43.8 11 82.8 30.4 122.4l89.3-69.5z" fill="#fbbc04"/>
                                <path d="M272 107.7c39.5 0 74.8 13.6 102.6 40.3l76.8-76.8C405.5 26.7 344.6 0 272 0 166.8 0 74.2 67.3 30.4 149.6l89.3 70.6C141.2 155.6 201.2 107.7 272 107.7z" fill="#ea4335"/>
                            </svg>
                            Daftar dengan Google
                        </button>
                    </div>
                    <p class="mt-8 text-center text-gray-600 text-sm">
                        Sudah punya akun?
                        <a href="#" @click.prevent="showLogin = true"
                            class="text-indigo-600 hover:text-indigo-700 font-semibold">Masuk</a>
                    </p>
                </div>
            </div>
        </div>

    <script>
        function togglePasswordVisibility() {
        const pwdInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        if (pwdInput.type === 'password') {
            pwdInput.type = 'text';
            eyeIcon.innerHTML = '<path d="M17.94 17.94a10.12 10.12 0 0 1-5.94 2.59C6 20.62 1 12 1 12s2.5-4.69 6.42-7.12M12 7v5l4 4"/>';
        } else {
            pwdInput.type = 'password';
            eyeIcon.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>';
        }
        }
    </script>
</body>
</html>

