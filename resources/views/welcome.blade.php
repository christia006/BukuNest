@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    <!-- Search form hanya di home -->
    <form method="GET" action="{{ route('home') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search books by title..." value="{{ $search }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <!-- List books -->
    <div class="row mt-2">
        @foreach($books as $book)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    @if($book->cover)
                        <img src="{{ asset('storage/' . $book->cover) }}" class="card-img-top" alt="{{ $book->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">Genre: {{ $book->genre->name }}</p>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary btn-sm">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
