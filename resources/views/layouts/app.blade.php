<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Conferences') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<nav class="bg-white border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

        <a href="{{ route('conferences.index') }}" class="text-lg font-semibold">
            {{ __('app.conferences') }}
        </a>

        <div class="flex items-center space-x-4">

            @auth
                <span>{{ Auth::user()->name }}</span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-red-600 hover:text-red-800">
                        {{ __('app.logout') }}
                    </button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="hover:underline">
                    {{ __('app.login') }}
                </a>

                <a href="{{ route('register') }}" class="hover:underline">
                    {{ __('app.register') }}
                </a>
            @endguest

        </div>

    </div>
</nav>

<main class="mt-8 max-w-7xl mx-auto px-4">
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>

</body>
</html>
