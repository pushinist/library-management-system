<?php

namespace App\Services\Transaction;

use App\Models\Reader;
use App\Models\Transaction;
use App\Repositories\Book\BookRepository;
use App\Repositories\Reader\ReaderRepository;
use App\Repositories\Transaction\TransactionRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class TransactionService
{
    protected $transactionRepository;
    protected $bookRepository;
    protected $readerRepository;

    public function __construct(
        TransactionRepository $repository,
        BookRepository $bookRepository,
        ReaderRepository $readerRepository
    ) {
        $this->transactionRepository = $repository;
        $this->bookRepository = $bookRepository;
        $this->readerRepository = $readerRepository;
    }

    public function create($data)
    {
        try {
            $reader = $this->readerRepository->getById($data['reader_id']);
            $this->checkBookAvailability($data['book_id']);
            $this->checkReader($reader);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        $this->bookRepository->decrement($data['book_id']);
        $this->transactionRepository->create($data);
        Cache::forget('transactions.all');
    }

    public function getById($id)
    {
        return $this->transactionRepository->getById($id);
    }

    private function checkBookAvailability($bookId)
    {
        $book = $this->bookRepository->getById($bookId);
        if ($book->amount < 1) {
            throw new \Exception('Книга недоступна для выдачи.');
        }
    }

    private function checkReader(Reader $reader)
    {
        if ($this->hasOverstayedBooks($reader)) {
            $this->readerRepository->block($reader);
            throw new \Exception('Обнаружены просроченые книги, читатель заблокирован!');
        }
        if ($reader->is_blocked) {
            throw new \Exception('Читатель заблокирован!');
        }
        if ($this->getGivenBooks($reader)->count() == 5) {
            throw new \Exception('Нельзя брать больше 5 книг одновременно!');
        }
    }

    private function hasOverstayedBooks(Reader $reader)
    {
        return $reader->books()->wherePivot('return_before', '<', Carbon::today())->exists();
    }

    private function getGivenBooks(Reader $reader)
    {
        return $reader->books()->wherePivot('status', 'given')->get();
    }

    public function getAll()
    {
        return Cache::remember('transactions.all', 607, function () {
            $transactions = $this->transactionRepository->getAll();
            return $transactions ?? [];
        });
    }

    public function getBookHistory($bookId)
    {
        return $this->transactionRepository->getBookHistory($bookId);
    }

    public function getReaderHistory($readerId)
    {
        return $this->transactionRepository->getReaderHistory($readerId);
    }

    public function update(Transaction $transaction)
    {
        $this->transactionRepository->update($transaction);
        $this->bookRepository->getById($transaction->book_id)->increment('amount');
        $this->bookRepository->increment($transaction->book_id);
    }
}
