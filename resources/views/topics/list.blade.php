@extends('layouts.layout')

@section('title', 'Nasze Tematy - Bezpieczeństwo Dzieci w Sieci')

@section('content')
    <div class="container py-5">
        <h2 class="text-center list-title">Nasze Tematy</h2>
        <p class="text-muted text-center mb-5">Wybierz temat, aby dowiedzieć się więcej.</p>

        <div class="list-group mx-auto list-group-custom">
            @foreach($topics as $topic)
                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <a href="{{ url('/topics/' . $topic->id) }}">
                        <div class="list-item-title">{{ $topic->title }}</div>
                        <div class="small text-muted mt-1">{{ $topic->subtitle }}</div>
                    </a>

                    @auth
                        <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-sm btn-outline-secondary">
                            Edytuj
                        </a>

                        <form id="delete-form" action="" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endauth
                </div>
            @endforeach
        </div>
    </div>

    <script>
    function confirmDelete(topicId) {
        if(confirm('Czy na pewno chcesz usunąć ten temat?')) {
            var form = document.getElementById('delete-form');
            form.action = '/topics/' + topicId;
            form.submit();
        }
    }
</script>

@endsection
