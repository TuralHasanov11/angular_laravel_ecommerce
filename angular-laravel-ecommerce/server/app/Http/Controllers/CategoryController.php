<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function store(StoreCategoryRequest $request)
    {   
        $validated = $request->validated();
        $category = new Category;
        $category->name = $validated["name"];
        $category->parent = $validated["parent"];
        $category->slug = Str::slug($validated["name"]);
        $category->save();

        return response()->json($category); 
    }

    public function detail(Category $category)
    {
        return response()->json($category);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validated = $request->validated();
        $category->name = $validated["name"];
        $category->parent = $validated["parent"];
        $category->slug = Str::slug($validated["name"]);
        $category->save();

        return response()->json($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json($category);
    }
}
