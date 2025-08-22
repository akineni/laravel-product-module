<?php

namespace App\Services;

use App\Models\Product;
use App\Models\ProductImage;
use Carbon\Carbon;

class DashboardService
{
    public function getStats(): array
    {
        return [
            'totalProducts'   => Product::count(),
            'deletedProducts' => Product::onlyTrashed()->count(),
            'totalImages'     => ProductImage::count(),
            'productsToday'   => Product::whereDate('created_at', Carbon::today())->count(),
        ];
    }
}
