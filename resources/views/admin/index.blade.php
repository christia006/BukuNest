@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="mb-4">📊 Admin Dashboard</h2>

    <div class="mb-4">
        <a href="{{ route('admin.books.create') }}" class="btn btn-primary me-2">+ Add Book</a>
        <a href="{{ route('admin.genres.create') }}" class="btn btn-success">+ Add Genre</a>
    </div>

    {{-- Books List --}}
    <h4>📚 Books List</h4>
    @if($books->count())
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cover</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($book->cover)
                                <img src="{{ asset('storage/' . $book->cover) }}" alt="" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->genre->name }}</td>
                        <td>{{ $book->stok }}</td>
                        <td>
                            <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">No books found.</div>
    @endif

    {{-- Genres List --}}
    <h4 class="mt-5">🏷️ Genres List</h4>
    @if($genres->count())
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Total Books</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($genres as $genre)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $genre->name }}</td>
                        <td>{{ $genre->description }}</td>
                        <td>{{ $genre->books_count }}</td>
                        <td>
                            <a href="{{ route('admin.genres.edit', $genre->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.genres.destroy', $genre->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">No genres found.</div>
    @endif

    {{-- Users List --}}
    <h4 class="mt-5">👥 Users List</h4>
    @if($users->count())
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">No users found.</div>
    @endif

    {{-- Comments List --}}
    <h4 class="mt-5">💬 Comments List</h4>
    @if($comments->count())
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Book</th>
                        <th>Comment</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $comment->user->name ?? 'Unknown' }}</td>
                        <td>{{ $comment->book->title ?? 'Unknown' }}</td>
                        <td>{{ $comment->content }}</td>
                        <td>{{ $comment->created_at->format('d M Y') }}</td>
                        <td>
                            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Delete this comment?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">No comments found.</div>
    @endif
</div>
@endsection
