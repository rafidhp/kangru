<h2>Edit advertisment data</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

{{ dd($advertisement) }}
<form action="" method="post" enctype="multipart/form-data">
    @csrf
</form>
