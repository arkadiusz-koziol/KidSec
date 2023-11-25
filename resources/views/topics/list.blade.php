@extends('layouts.layout')

@section('title', 'Nasze Tematy - Bezpieczeństwo Dzieci w Sieci')

@section('content')
    <div class="container py-5">
        <h2 class="text-center list-title">Nasze Tematy</h2>
        <p class="text-muted text-center mb-5">Wybierz temat, aby dowiedzieć się więcej.</p>

        <div class="list-group mx-auto list-group-custom">
            @foreach($topics as $topic)
                <a href="{{ url('/topics/' . $topic->id) }}" class="list-group-item list-group-item-action">
                    <div class="list-item-title">{{ $topic->title }}</div>
                    <div class="small text-muted mt-1">{{ $topic->subtitle }}</div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
