<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductAttribute;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function product_type_attributes(): BelongsToMany
    {
        return $this->belongsToMany(ProductAttribute::class);
    }
}
