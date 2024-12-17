<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Services\Book\BookService;
use App\Services\Reader\ReaderService;
use App\Services\Transaction\TransactionService;

class BaseController extends Controller
{
    public $bookService;
    public $readerService;
    public $transactionService;

    public function __construct(
        BookService $bookService,
        ReaderService $readerService,
        TransactionService $transactionService
    ) {
        $this->bookService = $bookService;
        $this->readerService = $readerService;
        $this->transactionService = $transactionService;
    }
}
