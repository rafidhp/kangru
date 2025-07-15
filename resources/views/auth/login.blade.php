<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | Kangru</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        .wavy-bg {
            background: repeating-radial-gradient(circle at 50% 50%, #fafafa 0, #fafafa 2px, #f0f0f0 2px, #f0f0f0 6px);
            background-size: 60px 60px;
            position: relative;
            overflow: hidden;
        }

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

<body class="min-h-screen bg-gradient-to-r from-indigo-900 via-blue-900 to-blue-800 flex items-center justify-center">
    <div
        class="w-full max-w-xs sm:max-w-sm md:max-w-md my-12 lg:max-w-lg bg-white rounded-2xl shadow-2xl p-6 md:p-10 wavy-bg relative">
        <img src="{{ asset('assets/background.jpg') }}"
            alt="Smartphone laying flat on a blue gradient background showing a purple mascot cartoon character with text content and a button displayed on screen in a clean modern style"
            class="fixed inset-0 bg-no-repeat bg-center bg-contain -z-10" onerror="this.style.display='none'" />
        <div class="relative z-10">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-10 w-10 mx-auto mb-4" />
            <h1 class="text-center font-semibold text-2xl md:text-3xl mb-1 text-gray-900 leading-tight">
                Selamat Datang<br />kembali
            </h1>
            <p class="text-center text-sm md:text-base text-gray-600 mb-8">
                Silakan masukkan detail Anda
            </p>
            <form class="space-y-6" action="{{ route('auth.postlogin') }}" method="POST" novalidate>
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input id="username" name="username" type="text" autocomplete="username" required
                        class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                        placeholder="Isi username anda" value="{{ old('username') }}" />
                    @error('username')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1 pr-10"
                        placeholder="••••••••" />
                    <button type="button" tabindex="-1"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 hover:text-indigo-600"
                        onclick="togglePasswordVisibility('password', 'eyeIconLogin')">
                        <i class="fas fa-eye text-[#777777] text-lg cursor-pointer" id="eyeIconLogin"></i>
                    </button>
                    @error('password')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full py-3 bg-black text-white rounded-full font-semibold text-lg hover:bg-indigo-900 transition-colors duration-200">
                    Masuk
                </button>
                @if (session('success'))
                    <div class="text-green-500 text-xs mt-2">{{ session('success') }}</div>
                @endif
            </form>
            <div class="mt-6 text-center">
                <span class="text-black font-semibold">Belum punya akun? </span>
                <a href="{{ route('auth.register') }}"
                    class="text-indigo-600 hover:text-indigo-700 font-semibold">Daftar</a>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    function togglePasswordVisibility(inputId, iconId) {
        const pwdInput = document.getElementById(inputId);
        const eyeIcon = document.getElementById(iconId);
        if (pwdInput.type === 'password') {
            pwdInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            pwdInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
