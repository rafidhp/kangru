<h2>Detail Article</h2>

<h3>{{ $article->title }}</h3>
@if ($article->image != null)
    <img src="{{ asset('storage/article/' . $article->image) }}" alt="Article image" style="width: 150px;">
@else
    <img src="https://ik.imagekit.io/rafidhp/kangru/default_article.jpg?updatedAt=1752264044993" alt="Article image"
        style="width: 150px;">
@endif
<p>{{ $article->content }}</p>
<p>Article Category: {{ $article->category->category_name }}</p>
<p>Upload date: {{ \Carbon\Carbon::parse($article->upload_date)->format('d-m-Y') }}</p>

<br><br>
<a href="{{ route('article.index') }}">Kembali</a>
