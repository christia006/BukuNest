@extends('layouts.app')

@section('title', 'Genre Detail')

@section('content')
<div class="container mt-4">
    <h2>{{ $genre->name }}</h2>
    <p>{{ $genre->description }}</p>

    <h4>Books in this Genre</h4>
    @if ($genre->books->count())
        <ul>
            @foreach($genre->books as $book)
                <li>
                    <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
                    by {{ $book->author }}
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">No books available in this genre yet.</p>
    @endif
</div>
@endsection
