<h2>Edit advertisment data</h2>

@if (session('error'))
    {{ session('error') }}
@endif

{{ dd($advertisement) }}
<form action="" method="post" enctype="multipart/form-data">
    @csrf
</form>
