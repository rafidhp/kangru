<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    @if (Auth::check())
        <h1 class="text-[#999000]">hello world {{ Auth::user()->name }}!</h1>
        <a href="{{ route('mbti_test') }}">MBTI Test</a>
        <br><br>
        <a href="{{ route('auth.logout') }}">Logout</a>
    @else
        <h1 class="text-[#999000]">hello world!</h1>
        <br>
        <a href="{{ route('auth.login') }}">Login</a>
    @endif
</body>

</html>
