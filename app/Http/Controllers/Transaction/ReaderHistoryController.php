<?php

namespace App\Http\Controllers\Transaction;

class ReaderHistoryController extends BaseController
{
    public function __invoke($readerId)
    {
        $readerTransactions = $this->transactionService->getReaderHistory($readerId);
        $reader = $this->readerService->getById($readerId);
        return view('transaction.readerHistory', compact('readerTransactions', 'reader'));
    }
}
