<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('genre')->latest()->get();
        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        $book->load(['genre', 'comments.user']);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'stok' => 'required|integer|min:0',
            'genre_id' => 'required|exists:genres,id',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $coverPath = $request->hasFile('cover') 
            ? $request->file('cover')->store('covers', 'public') 
            : null;

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'summary' => $request->summary,
            'stok' => $request->stok,
            'genre_id' => $request->genre_id,
            'cover' => $coverPath,
        ]);

        return redirect()->route('admin.index')->with('success', 'Book created successfully.');
    }

    public function edit(Book $book)
    {
        $genres = Genre::all();
        return view('books.edit', compact('book', 'genres'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'stok' => 'required|integer|min:0',
            'genre_id' => 'required|exists:genres,id',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('cover')) {
            $book->cover = $request->file('cover')->store('covers', 'public');
        }

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'summary' => $request->summary,
            'stok' => $request->stok,
            'genre_id' => $request->genre_id,
            'cover' => $book->cover,
        ]);

        return redirect()->route('admin.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.index')->with('success', 'Book deleted successfully.');
    }

    public function addComment(Request $request, Book $book)
    {
        $request->validate(['content' => 'required|string']);

        $book->comments()->create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
