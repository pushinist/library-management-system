<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'book_readers';
    protected $guarded = false;

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function reader()
    {
        return $this->belongsTo(Reader::class, 'reader_id');
    }
}
