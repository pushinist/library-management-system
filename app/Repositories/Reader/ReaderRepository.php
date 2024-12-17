<?php

namespace App\Repositories\Reader;

use App\Models\Reader;

class ReaderRepository implements ReaderRepositoryInterface
{
    public function create($data)
    {
        Reader::create($data);
    }

    public function getAll()
    {
        return Reader::all();
    }

    public function update($data, $id)
    {
        $reader = $this->getById($id);
        $reader->update($data);
    }

    public function getById($id)
    {
        return Reader::findOrFail($id);
    }

    public function block(Reader $reader)
    {
        $reader->is_blocked = true;
    }

}
