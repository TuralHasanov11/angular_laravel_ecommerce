<?php

namespace App\Http\Controllers;

use App\Models\ProductInventory;
use App\Http\Requests\StoreProductInventoryRequest;
use App\Http\Requests\UpdateProductInventoryRequest;

class ProductInventoryController extends Controller
{
    public function index()
    {
        $query = $request->query();

        $product_inventory = ProductInventory::whereHas(["product" => function (Builder $query){
            $query->where('web_id', $query->product);
        }])->get();

        return response()->json($product_inventory);
    }

    public function store(StoreProductInventoryRequest $request)
    {
        //
    }

    public function show(ProductInventory $productInventory)
    {
        //
    }

    public function update(UpdateProductInventoryRequest $request, ProductInventory $productInventory)
    {
        //
    }

    public function destroy(ProductInventory $productInventory)
    {
        //
    }
}
