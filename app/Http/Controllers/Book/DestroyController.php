<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;

class DestroyController extends BaseController
{
    public function __invoke(Book $book)
    {
        $this->bookService->delete($book);
        return redirect()->route('books.index');
    }
}
