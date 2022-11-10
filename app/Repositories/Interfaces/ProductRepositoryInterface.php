<?php

namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface
{

    public function getAll();

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);

}
