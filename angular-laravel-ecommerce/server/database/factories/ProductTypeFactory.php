<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductTypeFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name()
        ];
    }
}
