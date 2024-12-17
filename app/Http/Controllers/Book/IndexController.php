<?php

namespace App\Http\Controllers\Book;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $books = $this->bookService->getAll();
        return view('book.index', compact('books'));
    }
}
