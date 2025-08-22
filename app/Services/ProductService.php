<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getAll()
    {
        return Product::latest()->get();
    }

    public function create(array $data): Product
    {
        $images = $data['images'] ?? [];
        unset($data['images']);

        $product = Product::create($data);

        if($images) {
            $this->addImages($product, $images);
        }

        return $product;
    }

    public function update(Product $product, array $data)
    {
        $images = $data['images'] ?? [];
        unset($data['images']);

        $product->update($data);

        if($images) {
            $product->images()->delete(); // remove old
            $this->addImages($product, $images); // attach new
        }
    }

    public function delete(Product $product)
    {
        $product->delete();
    }

    public function addImages(Product $product, array $images)
    {
        foreach ($images as $image) {
            if ($image->isValid()) {
                // Store the file in 'public/products' and get path
                $path = $image->store('products', 'public');

                // Save path in DB
                $product->images()->create(['path' => $path]);
            }
        }
    }
}
