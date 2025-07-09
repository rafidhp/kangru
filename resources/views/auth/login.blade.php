<form action="{{ route('auth.postlogin') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
    <br><br>
    @error('username')
        <div>{{ $message }}</div>
        <br>
    @enderror
    @error('password')
        <div>{{ $message }}</div>
        <br>
    @enderror
    @if (session('success'))
        <div>{{ session('success') }}</div>
        <br>
    @endif
    <a href="{{ route('dashboard') }}">Kembali</a>
    <br><br>
    <a href="{{ route('auth.register') }}">Register</a>
</form>
