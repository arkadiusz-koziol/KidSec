@extends('layouts.layout')

@section('title', 'Szczegóły Tematu')

@section('content')
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">{{ $topic->title }}</h2>
                <h6 class="card-subtitle mb-2 text-muted">{{ $topic->subtitle }}</h6>
                <div class="card-text mt-3">
                    {!! ($topic->content) !!}
                </div>
            </div>
        </div>
        <a href="{{ route('topics.index') }}" class="btn btn-outline-primary mt-4">Powrót do listy tematów</a>
    </div>
@endsection
