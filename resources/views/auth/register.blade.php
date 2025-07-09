<form action="{{ route('auth.postregister') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="example@gmail.com" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Password Confirmation" required>
    <br><br>
    <button type="submit">Register</button>
    <br><br>
    <a href="{{ route('auth.login') }}">Kembali</a>
</form>
