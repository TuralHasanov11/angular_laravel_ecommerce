<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductInventory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function product_inventory(): HasMany
    {
        return $this->hasMany(ProductInventory::class);
    }
}
