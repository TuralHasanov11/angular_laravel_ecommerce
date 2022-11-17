<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductAttribute;

class ProductAttributeValue extends Model
{
    use HasFactory;

    public function product_attribute(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class);
    }
}
