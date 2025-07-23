<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Auth\LoginController;

Route::post('/custom-login', [LoginController::class, 'login'])->name('custom.login');

// Home '/' → redirect ke dashboard jika sudah login, jika tidak tampil welcome
Route::get('/', function (Request $request) {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    $search = $request->query('search');
    $books = Book::with('genre')
        ->when($search, fn ($query, $search) => $query->where('title', 'like', "%{$search}%"))
        ->latest()->get();
    return view('welcome', compact('books', 'search'));
})->name('home');

// Dashboard → hanya user login biasa
Route::get('/dashboard', function (Request $request) {
    $search = $request->query('search');
    $books = Book::with('genre')
        ->when($search, fn ($query, $search) => $query->where('title', 'like', "%{$search}%"))
        ->latest()->get();
    return view('dashboard', compact('books', 'search'));
})->middleware(['auth', 'verified'])->name('dashboard');

// PUBLIC routes (bisa diakses siapa saja)
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genres.show');

// AUTH user routes (login user biasa)
Route::middleware(['auth'])->group(function () {
    Route::post('/books/{book}/comments', [BookController::class, 'addComment'])->name('books.addComment');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ADMIN routes (hanya admin)
Route::prefix('admin')->middleware(IsAdmin::class)->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('books', BookController::class);
    Route::resource('genres', GenreController::class);
    Route::delete('comments/{comment}', [AdminController::class, 'destroyComment'])->name('comments.destroy');
});

// Redirect setelah login → cek role
Route::get('/redirect-after-login', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return redirect()->route('admin.index'); // admin ke admin dashboard
    }
    return redirect()->route('dashboard'); // user biasa ke dashboard
});

require __DIR__.'/auth.php';
