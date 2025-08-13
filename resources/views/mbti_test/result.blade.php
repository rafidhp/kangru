<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Hasil MBTI | Kangru</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
</head>

<body
    class="bg-gradient-to-br from-purple-50 via-white to-purple-50 text-gray-900 font-sans min-h-screen py-12 flex flex-col items-center justify-center px-4">

    @if (Auth::user()->mbti_type != null)
        <div class="bg-white shadow-2xl rounded-3xl max-w-3xl w-full p-10 prose prose-purple">
            <h1 class="text-3xl font-extrabold mb-6 text-center tracking-wide drop-shadow-md">Hasil MBTI Kamu</h1>

            <h2 class="text-2xl font-semibold mt-4">Tipe MBTI:</h2>
            <p class="text-4xl font-extrabold text-center text-purple-700 tracking-wide">{{ $mbtiType }}</p>

            <h2 class="text-2xl font-semibold mt-10">Penjelasan:</h2>
            <div class="mt-2 leading-relaxed text-gray-800">{!! $description !!}</div>

            <h2 class="text-2xl font-semibold mt-10">Rekomendasi:</h2>
            <div class="mt-2 leading-relaxed text-gray-800">{!! $recommendation !!}</div>

            <h2 class="text-2xl font-semibold mt-10">Rekomendasi Artikel:</h2>
            <div class="mt-2 leading-relaxed text-gray-800">
                @if (isset($recommendedArticles) && $recommendedArticles->count() > 0)
                    <ul class="list-disc list-inside space-y-2">
                        @foreach ($recommendedArticles as $article)
                            <li>
                                <a href="{{ route('article.show', $article->id) }}"
                                    class="text-purple-600 hover:underline">
                                    {{ $article->title }}
                                </a>
                                <p class="text-sm text-gray-600">{{ Str::limit($article->content ?? '', 100) }}</p>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Tidak ada rekomendasi artikel saat ini.</p>
                @endif
            </div>
        </div>

        @if ($recommendedArticles->isEmpty())
            <p>Belum ada artikel rekomendasi.</p>
        @else
            <p>Rekomendasi artikel untuk anda</p>
            <ul>
                @foreach ($recommendedArticles as $article)
                    <li>{{ $article->title }}</li>
                    <li>
                        @if ($article->image != null)
                            <img src="{{ asset('storage/article/' . $article->hashid . '_' . $article->image) }}"
                                alt="article_img" style="width: 150px">
                        @else
                            <img src="{{ asset('/storage/article/article_template.jpg') }}" alt="article_template"
                                style="width: 150px">
                        @endif
                    </li>
                    <li><a href="{{ route('article.show', ['article_id' => $article->hashid]) }}">Baca artikel</a></li>
                @endforeach
            </ul>
        @endif

        <a href="{{ route('dashboard') }}"
            class="mt-12 px-10 py-3 bg-purple-700 text-white rounded-3xl shadow-lg hover:bg-purple-800 transition duration-300 ease-in-out">Kembali</a>
    @else
        <div class="bg-white shadow-2xl rounded-3xl max-w-3xl w-full p-10 prose prose-purple text-center">
            <h1 class="text-3xl font-extrabold mb-6 tracking-wide drop-shadow-md">Anda harus melakukan tes MBTI dulu!
            </h1>
            <a href="{{ url('/mbti-test') }}"
                class="inline-block mt-6 px-10 py-3 bg-purple-700 text-white rounded-3xl shadow-lg hover:bg-purple-800 transition duration-300 ease-in-out">Mulai
                Tes MBTI</a>
        </div>
    @endif
</body>

</html>
