<h2>All Articles</h2>

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
                    <img src="{{ $article->image }}" alt="article_img" style="width: 150px">
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
                <a href="">View Detail</a>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
    @endforeach
</table>

<br><br>
@can('isAdmin')
    <a href="{{ route('article.create') }}">Buat artikel</a>
@endcan
