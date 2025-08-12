<h2>Advertiser Homepage</h2>

<h3>Welcome {{ Auth::user()->name }}</h3>

@if (session('success'))
    {{ session('success') }}
    <br>
@endif

<h4>Your advertisments</h4>
<table>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Image</th>
        <th>Description</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    @foreach ($advertisements as $advertisement)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $advertisement->title }}</td>
            <td>
                <img src="{{ asset('storage/advertisement/' . $advertisement->hashid . '_' . $advertisement->image) }}"
                    alt="advertisement image" style="width: 150px">
            </td>
            <td>{{ \Illuminate\Support\Str::limit($advertisement->description, 100, '...') }}</td>
            <td>{{ $advertisement->category->category_name }}</td>
            <td>
                <a href="">View Detail</a>
                <a href="{{ route('ad.edit', ['ad_id' => $advertisement->hashid]) }}">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
    @endforeach
</table>

<br><br>
<a href="{{ route('advertiser.create') }}">Create Advertisement</a>
<br><br>
<a href="{{ route('auth.logout') }}">logout</a>
