<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    public function definition()
    {
        return [
            "product_inventory_id" => 1,
            "last_checked" => iso8601($max = 'now'),
            "units" => 12,
            "units_sold" => 3
        ];
    }
}
