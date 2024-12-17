<?php

namespace App\Http\Controllers\Transaction;

class BookHistoryController extends BaseController
{
    public function __invoke($bookId)
    {
        $bookTransactions = $this->transactionService->getBookHistory($bookId);
        $bookTitle = $this->bookService->getById($bookId)->title;
        return view('transaction.bookHistory', compact('bookTransactions', 'bookTitle'));
    }
}
