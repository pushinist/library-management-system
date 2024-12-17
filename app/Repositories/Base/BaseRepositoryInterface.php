<?php

namespace App\Repositories\Base;

interface BaseRepositoryInterface
{
    public function create($data);

    public function getAll();

    public function getById($id);
}
