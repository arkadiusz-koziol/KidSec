@extends('layouts.layout')

@section('title', 'Bezpieczeństwo Dzieci w Sieci')

@section('content')
    <div class="text-center">
        <div class="container mx-auto px-6 py-16">
            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl">Bezpieczeństwo Dzieci w Sieci</h2>
            <p class="mt-4 text-2xl text-gray-800 font-semibold">Witaj na KidSec</p>
            <p class="mt-2 mb-4 text-gray-600">Twoje źródło wiedzy o bezpiecznym korzystaniu z Internetu.</p>
            <a href="{{ url ('/list') }}" class="mt-10 px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Sprawdź niebezpieczeństwa w sieci</a>
        </div>
    </div>
@endsection
