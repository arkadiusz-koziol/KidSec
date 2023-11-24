<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KidSec - Bezpieczeństwo Dzieci w Sieci</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div>
                    <a href="{{ url('/') }}" class="text-gray-800 text-xl font-bold md:text-2xl">KidSec</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16v2H4V5zm0 7h16v2H4v-2zm0 7h16v2H4v-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="md:flex items-center">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a href="#about" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">O Projekcie</a>
                    <a href="#tips" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Porady</a>
                    <a href="#resources" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Materiały</a>
                    <a href="#contact" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Kontakt</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <div class="bg-white">
        <div class="container mx-auto px-6 py-16 md:flex md:items-center">
            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl">Bezpieczeństwo Dzieci w Sieci</h2>
                <p class="mt-2 text-gray-600">Witaj na KidSec - Twoim źródle wiedzy o bezpiecznym korzystaniu z Internetu.</p>
                <button class="px-4 py-2 mt-4 text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Dowiedz się więcej</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <p class="text-gray-500 text-sm">&copy; 2023 KidSec. Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </footer>
</body>
</html>
