<?php

namespace App\Http\Controllers;

use App\Models\Product; // This tells the controller to use your Eloquent Model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category($type)
    {
        
        $products = Product::where('type', $type)->get();

        return view('category', compact('products', 'type'));
    }

    public function show($id)
    {
    // Eloquent: Find the product by ID or return a 404 page if it doesn't exist
    $product = \App\Models\Product::findOrFail($id); 

    return view('product-details', compact('product'));
}
}