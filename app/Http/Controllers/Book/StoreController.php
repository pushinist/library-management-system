<?php

namespace App\Http\Controllers\Book;

use App\Http\Requests\BookRequest;

class StoreController extends BaseController
{
    public function __invoke(BookRequest $request)
    {
        $data = $request->validated();
        $this->bookService->store($data);
        return redirect()->route('books.index');
    }
}
