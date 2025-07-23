@extends('layouts.app')
@section('title', 'Books')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Books</h2>
        @auth
            @if(Auth::user()->role == 'admin')
                <a href="{{ route('admin.books.create') }}" class="btn btn-primary">+ Add Book</a>
            @endif
        @endauth
    </div>

    @if($books->count())
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                @if($book->cover)
                    <img src="{{ asset('storage/' . $book->cover) }}" class="card-img-top" style="height:200px; object-fit:cover;">
                @else
                    <div class="card-img-top bg-light text-center" style="height:200px; line-height:200px;">No Image</div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">Genre: {{ $book->genre->name }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-outline-primary">Detail</a>
                    @auth
                        @if(Auth::user()->role == 'admin')
                            <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                            <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
        <div class="alert alert-info">No books found.</div>
    @endif
</div>
@endsection
