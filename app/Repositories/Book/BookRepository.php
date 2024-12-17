<?php

namespace App\Repositories\Book;

use App\Models\Book;
use Illuminate\Http\Request;

class BookRepository implements BookRepositoryInterface
{
    public function getAll()
    {
        return Book::all();
    }

    public function create($data)
    {
        Book::create($data);
    }

    public function filter(Request $request)
    {
        return Book::query()
            ->title($request->input('title'))
            ->author($request->input('author'))
            ->genre($request->input('genre'))
            ->get();
    }

    public function delete(Book $book)
    {
        $book->delete();
    }

    public function update($data, $id)
    {
        $book = $this->getById($id);
        $book->update($data);
    }

    public function getById($id)
    {
        return Book::findOrFail($id);
    }

    public function decrement($bookId)
    {
        $book = $this->getById($bookId);
        $book->decrement('amount');
    }

    public function increment($bookId)
    {
        $book = $this->getById($bookId);
        $book->increment('amount');
    }
}
