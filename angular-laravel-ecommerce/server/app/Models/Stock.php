<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['product_inventory_id', 'last_checked', 'units', 'units_sold'];

    public function product_inventory(): HasOne
    {
        return $this->hasOne(ProductInventory::class);
    }
}
