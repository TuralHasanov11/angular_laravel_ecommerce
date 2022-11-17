<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'alt_text', 'is_feature', 'product_inventory_id'];

    public function product_inventory(): BelongsTo
    {
        return $this->belongsTo(ProductInventory::class);
    }
}
