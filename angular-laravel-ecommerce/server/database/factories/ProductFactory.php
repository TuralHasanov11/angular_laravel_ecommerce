<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition()
    {   
        $name = fake()->name();
        return [
            "web_id" => fake()->numberBetween($min = 10000, $max = 90000),
            "name" => $name,
            "slug" => Str::slug($name),
            "category" => fake()->numberBetween($min = 1, $max = 10),
            "description" => fake()->sentence(),
            "is_active" => true,
        ];
    }
}
