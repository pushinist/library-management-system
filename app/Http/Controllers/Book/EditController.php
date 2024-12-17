<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;

class EditController extends BaseController
{
    public function __invoke(Book $book)
    {
        return view('book.edit', compact('book'));
    }
}
