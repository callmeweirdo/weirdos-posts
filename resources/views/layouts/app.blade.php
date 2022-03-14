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
                <a href="{{ route('dashboard.index') }}" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('post.index') }}" class="p-3">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3">{{ auth()->user()->username }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="inline p-3">
                        @csrf
                        <button type="submit" class="text-white bg-red-200 rounded">Fuck Off</button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a href="{{ route('login.index') }}" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register.index') }}" class="p-3">Register</a>
                </li>
            @endguest
            
            
        </ul>
    </nav>

    @yield('content')
</body>
</html>