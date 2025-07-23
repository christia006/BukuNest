@extends('layouts.app')
@section('title', 'Book Detail')

@section('content')
<div class="container mt-4">
    <h2>{{ $book->title }}</h2>
    <p>Author: {{ $book->author }}</p>
    <p>Genre: {{ $book->genre->name }}</p>
    @if($book->cover)
        <img src="{{ asset('storage/' . $book->cover) }}" width="200">
    @endif
    <p>{{ $book->summary }}</p>
    <p>Stok: {{ $book->stok }}</p>

    <h3>Comments</h3>
    @forelse($book->comments as $comment)
        <div class="mb-2 p-2 border rounded">
            <strong>{{ $comment->user->name ?? 'Unknown User' }}:</strong>
            {{ $comment->content }}
        </div>
    @empty
        <p class="text-muted">No comments yet.</p>
    @endforelse

    @auth
        @include('comments.create', ['book' => $book])
    @endauth
</div>
@endsection
