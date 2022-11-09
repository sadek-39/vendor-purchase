<?php

namespace App\Services;

use App\Models\Vendor;
use App\Repositories\Interfaces\VendorRepositoryInterface;

class VendorServices{

    private $vendorRepoInterface;
    public function __construct
    (
        VendorRepositoryInterface $vendorRepository

    )
    {
        $this->vendorRepoInterface = $vendorRepository;
    }

    public function getAll()
    {
        $vendors = $this->vendorRepoInterface->getAll();
        return $vendors;
    }

    public function store($data)
    {
        $vendor = $this->vendorRepoInterface->create($data);

        return $vendor;
    }

    public function update($id,array $data)
    {
        $updateVendor = $this->vendorRepoInterface->update($id,$data);

        return $updateVendor;
    }

    public function delete(Vendor $vendor)
    {
        $vendorDelete = $this->vendorRepoInterface->delete($vendor->id);

        return $vendorDelete;

    }

}
