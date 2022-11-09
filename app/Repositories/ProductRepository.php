<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    private $product;

    public function __construct
    (
        Product $product
    )
    {
        $this->product = $product;
    }

    public function getAll()
    {
        return $this->product->select('products.*')
            ->with('vendor')
            ->get();
    }

    public function create(array $data)
    {
        $product = $this->product;

        $product['item_name'] = $data['item_name'];
        $product['item_quantity'] = $data['item_quantity'];
        $product['unit_price'] = $data['unit_price'];
        $product['total_price'] = $data['item_quantity'] * $data ['unit_price'];
        $product['vendor_id'] = $data['vendor_id'] ;

        $product->save();

        return $product->id;

    }

    public function update(int $id, array $data)
    {
        $product = $this->product->find($id);

        $product['item_name'] = $data['item_name'];
        $product['item_quantity'] = $data['item_quantity'];
        $product['unit_price'] = $data['unit_price'];
        $product['total_price'] = $data['unit_price'] * $data['item_quantity'];


        return $product->update();

    }

    public function delete(int $id)
    {
        $product = $this->product->find($id);

        return $product->delete();

    }
}
