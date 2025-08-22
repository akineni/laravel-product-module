<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $filename = $this->faker->randomElement(range('a', 'j')) . '.jpg';

        return [
            'product_id' => Product::factory(), // fallback if used standalone
            'path'       => 'demo/' . $filename,
        ];
    }
}
