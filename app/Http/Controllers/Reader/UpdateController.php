<?php

namespace App\Http\Controllers\Reader;

use App\Http\Requests\ReaderRequest;

class UpdateController extends BaseController
{
    public function __invoke(ReaderRequest $request, $id)
    {
        $data = $request->validated();
        $this->readerService->updawte($data, $id);
        return redirect()->route('readers.index');
    }
}
