<!DOCTYPE html>
<html lang="pl">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DEVES5V3D0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-DEVES5V3D0');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
                @auth
                    <a href="{{ url('/add-topic') }}" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Dodaj Temat</a>
                @endauth
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
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
