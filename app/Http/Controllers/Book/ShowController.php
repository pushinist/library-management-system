<?php

namespace App\Http\Controllers\Book;

class ShowController extends BaseController
{
    public function __invoke($id)
    {
        $book = $this->bookService->getById($id);
        return view('book.show', compact('book'));
    }
}
