<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'title',
        'author',
        'genre_id',
        'cover',
        'summary',
        'stok',
    ];

    // Relasi: Book milik Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    // Relasi: Book punya banyak Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
