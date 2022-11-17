<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductAttributeFactory extends Factory
{
    public function definition()
    {
        return [
            "name" => fake()->name(),
            "description" => fake()->sentence(),
        ];
    }
}
