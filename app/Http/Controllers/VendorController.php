<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vendor\VendorStoreRequest;
use App\Http\Requests\Vendor\VendorUpdateRequest;
use App\Models\Vendor;
use App\Services\VendorServices;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    private $vendorService;

    public function __construct
    (
        VendorServices $vendorServices
    )
    {
        $this->vendorService = $vendorServices;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = $this->vendorService->getAll();

        return response()->json($vendors, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorStoreRequest $request)
    {
        //
        try {
            $vendorStore = $this->vendorService->store($request->all());
            return response()->json('Vendor saved successfully', 200);


        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 400);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('edit-vendor',
            compact(
                'vendor'
            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(VendorUpdateRequest $request, Vendor $vendor)
    {
        //
        try {
            $update = $this->vendorService->update($vendor->id, $request->all());

            return response()->json('Updated successfully', 200);
        } catch (\Exception $exception) {

            return response()->json($exception->getCode(), 400);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        try {
            $vendor = $this->vendorService->delete($vendor);


            return response()->json('Deleted successfully',200);

        }catch (\Exception $exception){
            return response()->json($exception->getMessage(),400);

        }


    }
}
