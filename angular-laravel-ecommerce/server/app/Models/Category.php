<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'slug', 'is_active', 'parent'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function parent_category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
