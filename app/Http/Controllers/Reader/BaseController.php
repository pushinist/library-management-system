<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\Services\Reader\ReaderService;

class BaseController extends Controller
{
    public $readerService;

    public function __construct(ReaderService $service)
    {
        $this->readerService = $service;
    }


}
