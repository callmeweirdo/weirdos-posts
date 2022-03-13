<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body class="bg-gray-300">

    <nav class="p-6 justify-between flex bg-white mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="/" class="p-3">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Weirdo</a>
            </li>
            <li>
                <a href="" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register.index') }}" class="p-3">Register</a>
            </li>
            <li>
                <a href="" class="p-3">Log Out</a>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>