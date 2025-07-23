@extends('layouts.admin')

@section('title', 'Edit Genre')

@section('content')
<div class="container mt-4">
    <h2>Edit Genre</h2>
    <form action="{{ route('admin.genres.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $genre->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description', $genre->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back to Admin</a>
    </form>
</div>
@endsection
