<h2>All Articles</h2>

@if (session('success'))
    {{ session('success') }}
@endif
<table>
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Title</th>
        <th>Content</th>
        <th>Category</th>
        <th>Upload Date</th>
        <th>Action</th>
    </tr>
    @foreach ($articles as $article)
        <tr>
            <td>{{ $loop->iteration }}</td>
            @if ($article->image != null)
                <td>
                    <img src="{{ asset('storage/article/' . $article->image) }}" alt="article_img" style="width: 150px">
                </td>
            @else
                <td>
                    <img src="https://ik.imagekit.io/rafidhp/kangru/default_article.jpg?updatedAt=1752264044993"
                        alt="article_template" style="width: 150px">
                </td>
            @endif
            <td>{{ $article->title }}</td>
            <td>{{ \Illuminate\Support\Str::limit($article->content, 100, '...') }}</td>
            <td>{{ $article->category->category_name }}</td>
            <td>{{ $article->upload_date }}</td>
            <td>
                <a href="{{ route('article.show', ['article_id' => $article->hashid]) }}">View
                    Detail</a>
                @can('isAdmin')
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                @endcan
            </td>
        </tr>
    @endforeach
    @empty($article)
        <tr>
            <td colspan="100%" style="text-align: center;">Article data is not available yet</td>
        </tr>
    @endempty
</table>

<br><br>
@can('isAdmin')
    <a href="{{ route('article.create') }}">Buat artikel</a>
    <br><br>
@endcan
<a href="{{ route('dashboard') }}">Kembali</a>
