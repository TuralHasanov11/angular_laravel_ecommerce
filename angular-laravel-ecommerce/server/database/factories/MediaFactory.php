<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    public function definition()
    {
        return [
            "img_url" => "images/products/default.jpg",
            "alt_text" => fake()->sentence(),
            "is_feature" => true,
        ];
    }
}
