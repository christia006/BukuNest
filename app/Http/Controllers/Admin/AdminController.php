<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use App\Models\Comment;
use App\Http\Middleware\IsAdmin;

class AdminController extends Controller
{
    public function __construct()
    {
        // Terapkan middleware is_admin di semua method controller ini
        $this->middleware(IsAdmin::class);
    }

    public function index()
    {
        $books = Book::with('genre')->latest()->get();
        $genres = Genre::withCount('books')->latest()->get();
        $users = User::latest()->get();
        $comments = Comment::with(['user', 'book'])->latest()->get();

        return view('admin.index', compact('books', 'genres', 'users', 'comments'));
    }

    public function destroyComment(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}
