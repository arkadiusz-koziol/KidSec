@extends('layouts.layout')

@section('title', 'Utwórz Nowy Temat')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4" style="font-weight: bold; font-size: 28px;">Utwórz Nowy Temat</h2>

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

                            <button type="submit" class="btn btn-custom">Zapisz</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <!-- Skrypt CKEditor -->
    <script>
        CKEDITOR.replace('content')
        .create(document.querySelector('#editor'), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
@endsection
