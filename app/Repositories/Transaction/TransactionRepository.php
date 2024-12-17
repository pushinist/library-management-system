<?php

namespace App\Repositories\Transaction;

use App\Models\Transaction;
use Carbon\Carbon;

class TransactionRepository implements TransactionRepositoryInterface
{
    public function create($data)
    {
        Transaction::create($data);
    }

    public function getAll()
    {
        return Transaction::with(['book', 'reader'])->get();
    }

    public function getById($id)
    {
        return Transaction::with(['book', 'reader'])->findOrFail($id);
    }

    public function getBookHistory($bookId)
    {
        return Transaction::with(['book', 'reader'])->where('book_id', $bookId)->get();
    }

    public function getReaderHistory($readerId)
    {
        return Transaction::with(['book', 'reader'])->where('reader_id', $readerId)->get();
    }

    public function update(Transaction $transaction)
    {
        $transaction->status = 'returned';
        $transaction->when_returned = Carbon::today();
        $transaction->save();
    }
}
