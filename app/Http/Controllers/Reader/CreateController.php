<?php

namespace App\Http\Controllers\Reader;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('reader.create');
    }
}
