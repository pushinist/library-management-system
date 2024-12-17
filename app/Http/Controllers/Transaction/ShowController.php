<?php

namespace App\Http\Controllers\Transaction;

class ShowController extends BaseController
{
    public function __invoke($id)
    {
        $transaction = $this->transactionService->getById($id);
        return view('transaction.show', compact('transaction'));
    }
}
