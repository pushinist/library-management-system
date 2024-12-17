<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Services\Book\BookService;

class BaseController extends Controller
{
    public $bookService;

    public function __construct(BookService $service)
    {
        $this->bookService = $service;
    }
}
