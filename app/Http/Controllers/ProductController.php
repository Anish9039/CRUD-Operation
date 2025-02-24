<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Display a paginated list of products
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products')); // ✅ Ensure this is correct
    }
    

    // Show the form for creating a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a new product in the database
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'detail' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')
                         ->with('success', 'Product created successfully.');
    }

    // Display a single product (optional)
    public function show(Product $product)
    {
        return view('products.view', compact('product'));
    }

    public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    $request->validate([
        'name'   => 'required',
        'detail' => 'required',
    ]);

    $product->update($request->all());

    return redirect()->route('product.index')->with('success', 'Product updated successfully.');
}

public function destroy(Product $product)
{
    $product->delete();
    
    return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
}


}   