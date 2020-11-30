<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tee3 | Tips, Tricks and Technologies!</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="bg-white p-6 flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="/sheets" class="p-3">Sheets</a>
            </li>
            <li>
                <a href="/apis" class="p-3">APIs</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="/profile" class="p-3">JD</a>
            </li>
            <li>
                <a href="/login" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            <li>
                <a href="/logout" class="p-3">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
