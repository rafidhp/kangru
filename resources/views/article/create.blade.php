<h2>Create Article</h2>
<form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="article title" value="{{ old('title') }}" required>
    <label for="image">Article image (optional)</label>
    <input type="file" name="image" id="image">
    @error('image')
        {{ $message }}
    @enderror
    <label for="content">Article Content</label>
    <textarea name="content" id="content" cols="30" rows="5" required></textarea>
    <select name="category_id" required>
        <option disabled selected>Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
    <input type="date" name="upload_date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"
        max="{{ date('Y-m-d') }}" required hidden>

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
    <button type="submit">Submit</button>
    <br><br>
    <a href="{{ route('article.index') }}">Kembali</a>
</form>
