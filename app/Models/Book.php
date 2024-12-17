<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function scopeTitle($query, $title)
    {
        return $query->when($title, fn($q) => $q->where('title', 'like', "%{$title}%"));
    }

    public function scopeAuthor($query, $author)
    {
        return $query->when($author, fn($q) => $q->where('author', 'like', "%{$author}%"));
    }

    public function scopeGenre($query, $genre)
    {
        return $query->when($genre, fn($q) => $q->where('genre', 'like', "%{$genre}%"));
    }

    public function readers(): BelongsToMany
    {
        return $this->belongsToMany(Reader::class, 'book_readers', 'book_id', 'reader_id')->withPivot('status');
    }
}
