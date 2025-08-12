<h2>Create Advertisement</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('ad.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="advertise title">
    <label for="image">Advertise image</label>
    <input type="file" name="image" id="image">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="5"></textarea>
    <input type="date" name="upload_date" value="{{ date('Y-m-d') }}" max="{{ date('Y-m-d') }}"
        min="{{ date('Y-m-d') }}" hidden>
    <select name="category_id">
        <option disabled selected>Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>

    <br><br>
    <button type="submit">Submit</button>
</form>
<br>
<a href="{{ route('advertiser.index') }}">Kembali</a>
