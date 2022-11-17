<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductAttributeValueFactory extends Factory
{
    public function definition()
    {
        return [
            "product_attribute_id" => fake()->numberBetween($min = 1, $max = 10),
            "attribute_value" => fake()->word()
        ];
    }
}
