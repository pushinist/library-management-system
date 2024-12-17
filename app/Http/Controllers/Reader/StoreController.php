<?php

namespace App\Http\Controllers\Reader;

use App\Http\Requests\ReaderRequest;

class StoreController extends BaseController
{
    public function __invoke(ReaderRequest $request)
    {
        $data = $request->validated();
        $this->readerService->store($data);
        return redirect()->route('readers.index');
    }
}
