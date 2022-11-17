<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promotion;

class PromoType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function promotions(): HasMany
    {
        return $this->hasMany(Promotion::class);
    }
}
