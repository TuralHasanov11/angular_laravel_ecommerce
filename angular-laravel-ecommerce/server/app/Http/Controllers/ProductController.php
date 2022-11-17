<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        $query = $request->query();

        $products = Product::whereHas(["category" => function (Builder $query){
            $query->where('slug', $query->category);
        }])->paginate(20);

        return response()->json($products);
    }

    public function store(StoreProductRequest $request)
    {
        //
    }

    public function detail(Product $product)
    {
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
