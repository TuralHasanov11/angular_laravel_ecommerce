<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promotion;

class Coupon extends Model
{
    use HasFactory;

    public function promotions(): HasMany
    {
        return $this->hasMany(Promotion::class);
    }
}
