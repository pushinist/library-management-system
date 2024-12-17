<?php

namespace App\Repositories\Reader;

use App\Models\Reader;
use App\Repositories\Base\BaseRepositoryInterface;

interface ReaderRepositoryInterface extends BaseRepositoryInterface
{


    public function update($data, $id);

    public function block(Reader $reader);
}
