<?php

namespace App\Http\Controllers\Transaction;

use App\Models\Transaction;

class UpdateController extends BaseController
{
    public function __invoke(Transaction $transaction)
    {
        $this->transactionService->update($transaction);
        return redirect()->route('transactions.index');
    }
}
