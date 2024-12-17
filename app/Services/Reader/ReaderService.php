<?php

namespace App\Services\Reader;

use App\Repositories\Reader\ReaderRepository;

class ReaderService
{
    protected $repository;

    public function __construct(ReaderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
//        dd('storing data...');
        $this->repository->create($data);
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }

    public function update($data, $id)
    {
        $this->repository->update($data, $id);
    }

    public function block($id)
    {
        $this->repository->block($id);
    }
}
