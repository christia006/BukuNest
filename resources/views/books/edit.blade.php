@extends('layouts.admin')

@section('title', 'Edit Book')

@section('content')
<div class="container mt-4">
    <h2>Edit Book</h2>
    <form method="POST" action="{{ route('admin.books.update', $book->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title', $book->title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Author</label>
            <input type="text" name="author" value="{{ old('author', $book->author) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Genre</label>
            <select name="genre_id" class="form-select" required>
                <option value="">-- Select Genre --</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" @if(old('genre_id', $book->genre_id) == $genre->id) selected @endif>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Cover Image</label>
            <input type="file" name="cover" class="form-control">
            @if($book->cover)
                <img src="{{ asset('storage/' . $book->cover) }}" width="120" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stok" value="{{ old('stok', $book->stok) }}" class="form-control" min="0" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.index') }}" class="btn btn-secondary ms-2">Back to Admin</a>
    </form>
</div>
@endsection
