<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Hasil MBTI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-purple-50 via-white to-purple-50 text-gray-900 font-sans min-h-screen py-12 flex flex-col items-center justify-center px-4">

    <div class="bg-white shadow-2xl rounded-3xl max-w-3xl w-full p-10 prose prose-purple">
        <h1 class="text-3xl font-extrabold mb-6 text-center tracking-wide drop-shadow-md">Hasil MBTI Kamu</h1>

        <h2 class="text-2xl font-semibold mt-4">Tipe MBTI:</h2>
        <p class="text-4xl font-extrabold text-center text-purple-700 tracking-wide">{{ $mbtiType }}</p>

        <h2 class="text-2xl font-semibold mt-10">Penjelasan:</h2>
        <div class="mt-2 leading-relaxed text-gray-800">{!! $description !!}</div>

        <h2 class="text-2xl font-semibold mt-10">Rekomendasi:</h2>
        <div class="mt-2 leading-relaxed text-gray-800">{!! $recommendation !!}</div>
    </div>

    <a href="{{ route('dashboard') }}"
        class="mt-12 px-10 py-3 bg-purple-700 text-white rounded-3xl shadow-lg hover:bg-purple-800 transition duration-300 ease-in-out">Kembali</a>
</body>

</html>
