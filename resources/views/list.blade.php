@extends('layouts.layout')

@section('title', 'Nasze Tematy - Bezpieczeństwo Dzieci w Sieci')

@section('content')
    <div class="container py-5">
        <h2 class="text-center list-title">Nasze Tematy</h2>
        <p class="text-muted text-center mb-5">Wybierz temat, aby dowiedzieć się więcej.</p>

        <div class="list-group mx-auto list-group-custom">
            <a href="{{ url('/topics/cyber-violence') }}" class="list-group-item list-group-item-action">
                <div class="list-item-title">Cyberprzemoc</div>
                <div class="small text-muted mt-1">Stalking, Definicja cyberprzemocy, Flaming, Cyberbullying, Happy slapping</div>
            </a>

            <a href="{{ url('/topics/financial-fraud') }}" class="list-group-item list-group-item-action">
                <div class="list-item-title">Wyłudzenia finansowe</div>
                <div class="small text-muted mt-1">Phishing, Malware, Ransomware, Pharming</div>
            </a>

            <a href="{{ url('/topics/sexting') }}" class="list-group-item list-group-item-action">
                <div class="list-item-title">Seksting</div>
            </a>

            <a href="{{ url('/topics/addiction') }}" class="list-group-item list-group-item-action">
                <div class="list-item-title">Uzależnienie od internetu</div>
                <div class="small text-muted mt-1">Gry online, Hazard (np. keydrop, lootboxy)</div>
            </a>

            <a href="{{ url('/topics/grooming') }}" class="list-group-item list-group-item-action">
                <div class="list-item-title">Grooming</div>
            </a>

            <a href="{{ url('/topics/harmful-content') }}" class="list-group-item list-group-item-action">
                <div class="list-item-title">Szkodliwe i nielegalne treści</div>
                <div class="small text-muted mt-1">Patostreamerzy, pornografia dziecięca, niebezpieczne challenge, ekstremistyczne materiały</div>
            </a>

            <a href="{{ url('/topics/surveillance') }}" class="list-group-item list-group-item-action">
                <div class="list-item-title">Podsłuch komputerowy i Naruszenie nierozerwalności danych komputerowych</div>
                <div class="small text-muted mt-1">Sniffer, keylogger, koń trojański</div>
            </a>
        </div>
    </div>
@endsection
