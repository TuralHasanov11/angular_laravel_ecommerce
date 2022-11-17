<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductInventory;

class ProductInventorySeeder extends Seeder
{
    public function run()
    {
        ProductInventory::factory()
                            ->has(Media::factory()->count(1), 'media')
                            ->count(60)
                            ->create();
    }
}
