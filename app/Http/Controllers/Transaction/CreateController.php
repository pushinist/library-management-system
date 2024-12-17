<?php

namespace App\Http\Controllers\Transaction;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $books = $this->bookService->getAll();
        $readers = $this->readerService->getAll();
        return view('transaction.create', compact('books', 'readers'));
    }
}
