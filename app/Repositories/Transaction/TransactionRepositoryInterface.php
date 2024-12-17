<?php

namespace App\Repositories\Transaction;

use App\Models\Transaction;
use App\Repositories\Base\BaseRepositoryInterface;

interface TransactionRepositoryInterface extends BaseRepositoryInterface
{

    public function getBookHistory($bookId);

    public function getReaderHistory($readerId);

    public function update(Transaction $transaction);
}
