<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product;
use App\Services\ProductServices;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productServices;

    public function __construct
    (
        ProductServices $productServices
    )
    {
        $this->productServices = $productServices;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productServices->getAll();

        return response()->json($products,200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        try {
            $productStore = $this->productServices->store($request->all());
            return response()->json('Product saved successfully', 200);


        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 400);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('edit-product',
        compact(
            'product'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        try {
            $update = $this->productServices->update($product->id, $request->all());

            return response()->json('Updated successfully', 200);
        } catch (\Exception $exception) {

            return response()->json($exception->getCode(), 400);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product = $this->productServices->delete($product);


            return response()->json('Deleted successfully',200);

        }catch (\Exception $exception){
            return response()->json($exception->getMessage(),400);

        }
    }
}
