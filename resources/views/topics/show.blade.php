@extends('layouts.layout')

@section('title', 'Szczegóły Tematu')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">{{ $topic->title }}</h2>
        <p class="text-muted">{{ $topic->subtitle }}</p>
        <div class="content">
            {{ $topic->content }}
        </div>
        <a href="{{ route('topics.index') }}" class="btn btn-primary mt-4">Powrót do listy tematów</a>
    </div>
@endsection
