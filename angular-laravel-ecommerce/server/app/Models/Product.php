<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductInventory;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['web_id', 'slug', 'name', 'description', 'category', 'is_active'];

    public function product_inventory(): HasMany
    {
        return $this->hasMany(ProductInventory::class);
    }

    public function category(): BelongsTo
    {   
        return $this->belongsTo(Category::class);
    }
}
