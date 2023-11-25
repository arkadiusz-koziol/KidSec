@extends('layouts.layout')

@section('title', 'Utwórz Nowy Temat')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Utwórz Nowy Temat</h2>

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
    <script>
    CKEDITOR.replace('content', {
        extraPlugins: 'image,justify,format',
        toolbar: [
            { name: 'clipboard', items: ['Undo', 'Redo'] },
            { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'insert', items: ['Image', 'Table'] },
            '/',
            { name: 'document', items: ['Source'] }
        ],
        filebrowserUploadUrl: "{{ route('upload.image') }}",
        filebrowserUploadMethod: 'form'
    });
</script>

@endsection
