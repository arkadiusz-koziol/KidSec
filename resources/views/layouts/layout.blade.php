<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KidSec - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-gray-800 text-xl font-bold md:text-2xl">KidSec</a>

            <!-- Nawigacja -->
            <div class="flex flex-col md:flex-row md:mx-6">
                <a href="{{ url('/about') }}" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">O Projekcie</a>
                <a href="{{ url('/tips') }}" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Porady</a>
                <a href="{{ url('/resources') }}" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Materiały</a>
                <a href="{{ url('/contact') }}" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Kontakt</a>
            </div>
        </div>
    </nav>

    <div class="flex-grow">
        @yield('content')
    </div>

    <footer class="bg-white">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <p class="text-gray-500 text-sm">&copy; 2023 KidSec. Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </footer>
</body>
</html>
