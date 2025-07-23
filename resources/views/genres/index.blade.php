@extends('layouts.app')

@section('title', 'Genres')

@section('content')
<div class="container mt-4">
    <h2>Genres</h2>
    <div class="row">
        @foreach($genres as $genre)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $genre->name }}</h5>
                        <p class="card-text">{{ $genre->description }}</p>
                        <a href="{{ route('genres.show', $genre->id) }}" class="btn btn-primary btn-sm">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
