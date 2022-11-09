<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductServices{

    private $productRepoInterface;
    public function __construct
    (
        ProductRepositoryInterface $productRepository

    )
    {
        $this->productRepoInterface = $productRepository;
    }

    public function getAll()
    {
        $products = $this->productRepoInterface->getAll();
        return $products;
    }

    public function store($data)
    {
        $product = $this->productRepoInterface->create($data);

        return $product;
    }

    public function update($id,array $data)
    {
        $updateProduct = $this->productRepoInterface->update($id,$data);

        return $updateProduct;
    }

    public function delete(Product $product)
    {
        $productDelete = $this->productRepoInterface->delete($product->id);

        return $productDelete;

    }

}
