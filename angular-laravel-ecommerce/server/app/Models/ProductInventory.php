<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;
use App\Models\Product;
use App\Models\Brand;


class ProductInventory extends Model
{
    use HasFactory;

    protected $fillable = ['sku', 'upc', 'product_type_id', 'product_id', 'brand_id', 'is_active', 'is_default', 'retail_price', 
                            'retail_price', 'store_price', 'is_digital', 'weight'];

    public function product_type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
