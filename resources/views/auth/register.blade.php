<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg bg-white rounded-2xl shadow-2xl p-6 md:p-10 wavy-bg relative my-12">
        <img
        src="{{ asset('assets/background.jpg') }}"
        alt="Smartphone laying flat on a blue gradient background showing a purple mascot cartoon character with text content and a button displayed on screen in a clean modern style"
        class="fixed inset-0 bg-no-repeat bg-center bg-contain -z-10"
        onerror="this.style.display='none'"
        />
        <div class="relative z-10">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-10 w-10 mx-auto mb-4" />
            <h1 class="text-center font-semibold text-2xl md:text-3xl mb-1 text-gray-900 leading-tight">
                Daftar Akun Baru
            </h1>
            <p class="text-center text-sm md:text-base text-gray-600 mb-8">
                Silakan isi data untuk mendaftar
            </p>
            <form class="space-y-6" action="{{ route('auth.postregister') }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="mb-4 text-red-600 text-sm bg-red-50 border border-red-200 rounded p-3">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        required
                        value="{{ old('username') }}"
                        class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                        placeholder="Nama Pengguna"
                    />
                    @error('username')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        required
                        value="{{ old('name') }}"
                        class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                        placeholder="Nama Lengkap"
                    />
                    @error('name')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="age" class="block text-sm font-medium text-gray-700">Umur</label>
                    <input
                        id="age"
                        name="age"
                        type="number"
                        min="1"
                        required
                        value="{{ old('age') }}"
                        class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                        placeholder="Umur"
                    />
                    @error('age')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        autocomplete="email"
                        required
                        value="{{ old('email') }}"
                        class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1"
                        placeholder="example@email.com"
                    />
                    @error('email')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="relative">
                    <input
                        id="password"
                        name="password"
                        type="password"
                        autocomplete="new-password"
                        required
                        class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1 pr-10"
                        placeholder="••••••••"
                    />
                    <button type="button" tabindex="-1"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 hover:text-indigo-600"
                        onclick="togglePasswordVisibility('password', 'eyeIconReg')">
                        <svg id="eyeIconReg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                    @error('password')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="relative">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        autocomplete="new-password"
                        required
                        class="mt-1 block w-full border-b border-gray-300 focus:border-indigo-600 focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-900 bg-transparent pb-1 pr-10"
                        placeholder="••••••••"
                    />
                    <button type="button" tabindex="-1"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 hover:text-indigo-600"
                        onclick="togglePasswordVisibility('password_confirmation', 'eyeIconRegConf')">
                        <svg id="eyeIconRegConf" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
                <button type="submit" class="w-full py-3 bg-black text-white rounded-full font-semibold text-lg hover:bg-indigo-900 transition-colors duration-200">
                    Daftar
                </button>
            </form>
            <div class="mt-6 text-center">
                <span class="text-black font-semibold">Sudah punya akun? </span>
                <a href="{{ route('auth.login') }}"
                    class="text-indigo-600 hover:text-indigo-700 font-semibold">Masuk</a>
            </div>
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
        eyeIcon.innerHTML = `
            <path d="M17.94 17.94A10.12 10.12 0 0 1 12 20c-7 0-11-8-11-8a21.77 21.77 0 0 1 5.06-6.94"/>
            <path d="M1 1l22 22"/>
        `;
    } else {
        pwdInput.type = 'password';
        eyeIcon.innerHTML = `
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
            <circle cx="12" cy="12" r="3"/>
        `;
    }
}
</script>
