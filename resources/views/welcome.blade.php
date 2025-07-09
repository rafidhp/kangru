<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
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
