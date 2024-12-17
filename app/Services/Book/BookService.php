<?php

namespace App\Services\Book;

use App\Models\Book;
use App\Repositories\Book\BookRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BookService
{
    protected $repository;

    public function __construct(BookRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
        $this->repository->create($data);
        Cache::forget('books.all');
    }

    public function create()
    {
        return view('book.create');
    }

    public function getAll()
    {
        return Cache::remember('books.all', 600, function() {
            return $this->repository->getAll();
        });
    }

    public function getFiltered(Request $request)
    {
        return $this->repository->filter($request);
    }

    public function delete(Book $book)
    {
        $this->repository->delete($book);
        Cache::forget('books.all');
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }

    public function update($data, $id)
    {
        $this->repository->update($data, $id);
    }


}

