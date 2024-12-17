<?php

namespace App\Http\Controllers\Reader;

use App\Models\Reader;

class EditController extends BaseController
{
    public function __invoke(Reader $reader)
    {
        return view('reader.edit', compact('reader'));
    }
}
