<?php

namespace App\Http\Controllers\Transaction;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $transactions = $this->transactionService->getAll();
        return view('transaction.index', compact('transactions'));
    }
}
