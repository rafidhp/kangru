<h2>Edit advertisment data</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('ad.update', ['ad_id' => $ad->hashid]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="ad title" value="{{ $ad->title }}">
    <label for="image">Ad Image (leave blank if there are no changes)</label>
    <input type="file" name="image" id="image">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="5">{{ $ad->description }}</textarea>
    <select name="category_id">
        <option disabled>Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $ad->category_id ? 'selected' : '' }}>
                {{ $category->category_name }}</option>
        @endforeach
    </select>

    <br><br>
    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('advertiser.index') }}">kembali</a>
