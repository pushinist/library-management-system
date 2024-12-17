<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Requests\TransactionRequest;

class StoreController extends BaseController
{
    public function __invoke(TransactionRequest $request)
    {
        $data = $request->validated();
        $this->transactionService->create($data);
        return redirect()->route('transactions.index');
    }
}
