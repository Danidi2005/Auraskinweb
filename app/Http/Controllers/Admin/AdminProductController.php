<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required', // The view sends category_id
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        // Store in storage/app/public/products
        $path = $request->image->storeAs('products', $imageName, 'public');

        // Find category name and group to fill 'category' and 'type' fields
        $category = Category::find($request->category_id);

        Product::create([
            'name' => $request->name,
            'category' => $category->group, // Assuming 'category' field maps to group usually?
            // Wait, existing seeds or logic:
            // In AdminCategoryController index: Product::where('type', $category->name)
            // So 'type' in products table = Category Name (e.g. Cleanser)
            // And 'category' inside Product model probably refers to the group? Or maybe 'category' column IS the type?
            // Let's check view index.blade.php: {{ $product->category }} ({{ $product->type }})
            // If Type is the specific kind (Cleanser), then Category might be the broader group (FaceCare).
            // Let's use that mapping.
            'category' => $category->group, // e.g. FaceCare
            'type' => $category->name,      // e.g. Cleanser
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
            'stock' => $request->stock,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ];

        // Update category/type mapping
        $category = Category::find($request->category_id);
        if ($category) {
            $data['category'] = $category->group;
            $data['type'] = $category->name;
        }

        if ($request->hasFile('image')) {
            // Delete old image if exists? (Optional, might verify path first)
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('products', $imageName, 'public');
            $data['image'] = $imageName;
        }

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
