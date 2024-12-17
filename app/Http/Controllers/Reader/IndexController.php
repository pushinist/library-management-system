<?php

namespace App\Http\Controllers\Reader;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $readers = $this->readerService->getAll();
        return view('reader.index', compact('readers'));
    }
}
