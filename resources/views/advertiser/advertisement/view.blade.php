<h2>View Ad</h2>

<table>
    <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Description</th>
        <th>Category</th>
    </tr>
    <tr>
        <td>{{ $ad->title }}</td>
        <td>
            <img src="{{ asset('storage/advertisement/' . $ad->hashid . '_' . $ad->image) }}" alt="advertisement image"
                style="width: 150px">
        </td>
        <td>{{ $ad->description }}</td>
        <td>{{ $ad->category->category_name }}</td>
    </tr>
</table>

<br>
<a href="{{ route('advertiser.index') }}">Kembali</a>
