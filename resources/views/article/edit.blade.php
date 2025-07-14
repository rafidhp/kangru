<h2>Edit Article</h2>

<form action="{{ route('article.update', ['article_id' => $article->hashid]) }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="article title" value="{{ $article->title }}">
    <label for="image">Article Image (optional)</label>
    @if ($article->image != null)
        <img src="{{ asset('storage/article/' . $article->hashid . '_' . $article->image) }}" alt="article image"
            style="width: 150px">
        <a href="{{ route('article.imageDestroy', ['article_id' => $article->hashid]) }}">Delete Image</a>
    @endif
    <input type="file" name="image" id="image">
    <textarea name="content" id="content" cols="30" rows="5" required>{{ $article->content }}</textarea>
    <select name="category_id" required>
        <option disabled>Select Category</option>
        <option value="{{ $article->category->id }}"
            {{ $article->category_id == $article->category->id ? 'selected' : '' }}>
            {{ $article->category->category_name }}</option>
    </select>

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <br><br>
    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('article.index') }}">Kembali</a>
