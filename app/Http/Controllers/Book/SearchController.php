<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;

class SearchController extends BaseController
{
    public function __invoke(Request $request)
    {
        $books = $this->bookService->getFiltered($request);
        return view('book.search', compact('books'));
    }
}
