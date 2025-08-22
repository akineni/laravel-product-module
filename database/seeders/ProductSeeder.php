<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::factory(10)
        ->create()
        ->each(function ($product) {
            \App\Models\ProductImage::factory(rand(1, 3))->create([
                'product_id' => $product->id,
            ]);
        });
    }
}
