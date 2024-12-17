<?php

namespace App\Http\Controllers\Book;

use App\Http\Requests\BookRequest;

class UpdateController extends BaseController
{
    public function __invoke(BookRequest $request, $id)
    {
        $data = $request->validated();
        $this->bookService->update($data, $id);
        return redirect()->route('books.index');
    }
}
