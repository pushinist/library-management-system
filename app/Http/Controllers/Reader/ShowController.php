<?php

namespace App\Http\Controllers\Reader;

class ShowController extends BaseController
{
    public function __invoke($id)
    {
        $reader = $this->readerService->getById($id);
        return view('reader.show', compact('reader'));
    }
}
