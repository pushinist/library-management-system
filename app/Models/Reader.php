<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reader extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_readers', 'reader_id', 'book_id');
    }
}
