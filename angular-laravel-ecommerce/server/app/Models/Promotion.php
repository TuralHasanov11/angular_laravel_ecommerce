<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PromoType;
use App\Models\Coupon;
use App\Models\ProductInventory;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'promo_reduction', 'coupon_id', 'promo_type_id',
                            'promo_start', 'time_end', 'is_active', 'is_scheduled'];

                            
    public function promo_type(): BelongsTo
    {
        return $this->belongsTo(PromoType::class);
    }

    public function coupon(): BelongsTo
    {
        return $this->belongsTo(Coupon::class);
    }

    public function products_on_promotions(): BelongsToMany
    {
        return $this->belongsToMany(ProductInventory::class, 'product_promo')
                        ->as('product_promo')
                        ->withPivot('price_override', 'promo_price');
    }
}
