<?php

namespace App\Repositories;

use App\Models\Vendor;
use App\Repositories\Interfaces\VendorRepositoryInterface;

class VendorRepository implements VendorRepositoryInterface
{

    private $vendor;

    public function __construct
    (
        Vendor $vendor
    )
    {
        $this->vendor = $vendor;
    }

    public function getAll()
    {
        return $this->vendor->select('vendors.*')->get();
    }

    public function create(array $data)
    {
        $vendor = $this->vendor;

        $vendor['name'] = $data['name'];
        $vendor['email'] = $data['email'];
        $vendor['phone'] = $data['phone'];
        $vendor['address'] = $data['address'];

        $vendor->save();

        return $vendor->id;

    }

    public function update(int $id, array $data)
    {
        $vendor = $this->vendor->find($id);

        $vendor['name'] = $data['name'];
        $vendor['email'] = $data['email'];
        $vendor['phone'] = $data['phone'];
        $vendor['address'] = $data['address'];

        return $vendor->update();

    }

    public function delete(int $id)
    {
        $vendor = $this->vendor->find($id);

        return $vendor->delete();

    }
}
