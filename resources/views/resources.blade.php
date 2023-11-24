@extends('layouts.layout')

@section('title', 'Materiały - Bezpieczeństwo Dzieci w Sieci')

@section('content')
    <div class="container mx-auto px-6 py-16">
        <h2 class="text-4xl font-bold text-gray-800">Materiały Edukacyjne</h2>
        <p class="mt-2 text-gray-600">Znajdź tutaj materiały edukacyjne, poradniki i zasoby, które pomogą w zapewnieniu bezpieczeństwa dzieci w Internecie.</p>

        <div class="mt-4">
            <h3 class="text-xl font-semibold">Poradnik dla Rodziców</h3>
            <p>Krótki opis poradnika dla rodziców...</p>
            <a href="#" class="text-indigo-600 hover:text-indigo-800">Pobierz</a>
        </div>
        <div class="mt-4">
            <h3 class="text-xl font-semibold">Aplikacje Edukacyjne</h3>
            <p>Lista aplikacji edukacyjnych...</p>
            <a href="#" class="text-indigo-600 hover:text-indigo-800">Więcej informacji</a>
        </div>
        <div class="mt-4">
            <h3 class="text-xl font-semibold">Bezpieczne Przeglądanie Internetu</h3>
            <p>Wskazówki dotyczące bezpiecznego przeglądania Internetu przez dzieci.</p>
            <a href="#" class="text-indigo-600 hover:text-indigo-800">Czytaj więcej</a>
        </div>
    </div>
@endsection
