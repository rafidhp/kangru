<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil MBTI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 font-sans min-h-screen py-8 flex justify-center">
    <div class="bg-white shadow-lg rounded-lg max-w-2xl w-full p-6 prose">
        <h1 class="text-2xl font-bold mb-4 text-center">Hasil MBTI Kamu</h1>

        <h2 class="text-xl font-semibold">Tipe MBTI:</h2>
        <p class="text-3xl font-bold text-center">{{ $mbtiType }}</p>

        <h2 class="text-xl font-semibold mt-6">Penjelasan:</h2>
        {!! $description !!}

        <h2 class="text-xl font-semibold mt-6">Rekomendasi:</h2>
        {!! $recommendation !!}
    </div>
</body>

</html>
