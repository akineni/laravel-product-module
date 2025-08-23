<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Product;

class ProductController extends Controller
{
    protected ProductService $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $products = $this->service->getAll();
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = $this->service->create($request->validated());
        return redirect()->route('dashboard.products.create')->with([
            'class' => 'success',
            'message' => 'Product created!'
        ]);
    }

    public function edit(Product $product)
    {
        return view('dashboard.products.edit', compact('product'));
    }

    public function show(Product $product)
    {
        return view('dashboard.products.show', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $this->service->update($product, $request->all());
        return redirect()->route('dashboard.products.index')->with([
            'class' => 'success',
            'message' => 'Product updated!'
        ]);;
    }

    public function destroy(Product $product)
    {
        $this->service->delete($product);
        return redirect()->route('dashboard.products.index')->with([
            'class' => 'success',
            'message' => 'Product deleted!'
        ]);
    }
}
