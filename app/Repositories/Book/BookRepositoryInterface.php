<?php

namespace App\Repositories\Book;

use App\Models\Book;
use App\Repositories\Base\BaseRepositoryInterface;
use Illuminate\Http\Request;

interface BookRepositoryInterface extends BaseRepositoryInterface
{
    public function filter(Request $request);

    public function delete(Book $book);

    public function update($data, $id);

    public function decrement($bookId);

    public function increment($bookId);
}
