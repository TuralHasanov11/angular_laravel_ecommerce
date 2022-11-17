<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductInventoryFactory extends Factory
{
    public function definition()
    {
        return [
            "sku" => fake()->numberBetween($min = 10000, $max = 90000),
            "upc" => fake()->numberBetween($min = 10000, $max = 90000),
            "product_type" => fake()->numberBetween($min = 1, $max = 10),
            "product" => fake()->numberBetween($min = 1, $max = 30),
            "brand" => fake()->numberBetween($min = 1, $max = 10),
            "is_active" => true,
            "is_default" => fake()->numberBetween($min = 0, $max = 1),
            "retail_price" => fake()->numberBetween($min = 10, $max = 100),
            "store_price" => fake()->numberBetween($min = 10, $max = 100),
            "sale_price" => fake()->numberBetween($min = 100, $max = 200),
            "is_on_sale" => true,
            "is_digital" => fake()->numberBetween($min = 0, $max = 1),
            "weight" => fake()->numberBetween($min = 100, $max = 900),
        ];
    }
}
