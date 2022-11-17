<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return response()->json($brands);
    }

    public function store(StoreBrandRequest $request)
    {
        $brand = Brand::create($request->validated());
        return response()->json($brand);
    }

    public function show(Brand $brand)
    {
        return response()->json($brand);
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->name = $request->validated()['name'];
        $brand->save();
        return response()->json($brand);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return response()->json($brand);
    }
}
