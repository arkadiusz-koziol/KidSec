@extends('layouts.layout')

@section('title', 'Utwórz Nowy Temat')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">Utwórz Nowy Temat</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('topics.store') }}">
                            @csrf
                            <!-- Tytuł -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Tytuł</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <!-- Podtytuł -->
                            <div class="mb-3">
                                <label for="subtitle" class="form-label">Podtytuł</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle">
                            </div>

                            <!-- Treść -->
                            <div class="mb-3">
                                <label for="content" class="form-label">Treść</label>
                                <textarea class="form-control" id="content" name="content" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Zapisz</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skrypt CKEditor -->
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
