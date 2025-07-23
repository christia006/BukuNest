@extends('layouts.admin')

@section('title', 'Add Book')

@section('content')
<div class="container mt-4">
    <h2>Add New Book</h2>
    <form method="POST" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Author</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Genre</label>
            <select name="genre_id" class="form-select" required>
                <option value="">-- Select Genre --</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Cover Image</label>
            <input type="file" name="cover" class="form-control">
        </div>

        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stok" class="form-control" value="0" min="0" required>
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
