<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Controllers\CategoryController;
use App\Controllers\BrandController;
use App\Controllers\ProductController;
// use App\Controllers\BrandController;
// use App\Controllers\BrandController;
// use App\Controllers\BrandController;
// use App\Controllers\BrandController;
// use App\Controllers\BrandController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('categories')->group(function () {
    Route::get('', [CategoryController::class, 'index']);
    Route::post('', [CategoryController::class, 'store']);
    Route::get('{category:slug}', [CategoryController::class, 'detail']);
    Route::put('{category:slug}', [CategoryController::class, 'update']);
    Route::delete('{category:slug}', [CategoryController::class, 'destroy']);
});

Route::prefix('brands')->group(function () {
    Route::get('', [BrandController::class, 'index']);
    Route::post('', [BrandController::class, 'store']);
    Route::get('{brand}', [BrandController::class, 'detail']);
    Route::put('{brand}', [BrandController::class, 'update']);
    Route::delete('{brand}', [BrandController::class, 'destroy']);
});

Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index']);
    Route::post('', [ProductController::class, 'store']);
    Route::get('{product:slug}', [ProductController::class, 'detail']);
    Route::put('{product:slug}', [ProductController::class, 'update']);
    Route::delete('{product:slug}', [ProductController::class, 'destroy']);
});