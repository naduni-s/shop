<?php

namespace App\Http\Controllers;
use App\Models\Unisex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UniController extends Controller
{
    
    public function index()
    {
        // Retrieve all products from the 'mens' table
        $products = Unisex::all();
        
        // Pass the 'products' variable to the view
        return view('unisex', compact('products'));
    }

    public function showProducts()
{
    $products = Unisex::all();

    return view('unisex', ['unisex' => $products]);
}


//display all unisex products in admin page
public function UnisexProducts()
{
    // Check if the user is authenticated
    if (Auth::check()) {
        $userName = Auth::user()->name;
    } else {
        // Redirect to login page or handle accordingly if the user is not authenticated
        return redirect()->route('login'); // or return a response like 'Unauthorized'
    }

    // Fetch unisex products from the database (use Unisex model)
    $unisexproducts = Unisex::all();

    // Pass the correct variables to the view
    return view('admin.unisexproduct', compact('unisexproducts', 'userName'));
}


// add product to unisex table
public function storeProduct(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'description' => 'required|string|max:1000',
        'tags' => 'nullable|string', // Tags are now a string, not an array
    ]);

    if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
        $imagePath = $request->file('image_url')->store('product_images', 'public');
    } else {
        $imagePath = null; 
    }

    Unisex::create([
        'name' => $request->name,
        'price' => $request->price,
        'image_url' => $imagePath,
        'description' => $request->description,
        'tags' => $request->tags, // Save tags directly as a string
    ]);

    return redirect()->back()->with('success', 'Product added successfully');
}


// update the product in unisex table
public function updateProduct(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string|max:1000',
        'tags' => 'nullable|string', // Tags as a comma-separated string
        'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $product = Unisex::findOrFail($id);

    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description');
    $product->tags = $request->input('tags');

    if ($request->hasFile('image_url')) {
        if ($product->image_url && Storage::exists('public/' . $product->image_url)) {
            Storage::delete('public/' . $product->image_url);
        }

        $imagePath = $request->file('image_url')->store('images', 'public');
        $product->image_url = $imagePath; 
    }

    $product->save();

    return redirect()->back()->with('success', 'Product updated successfully!');
}

// delete the product in unisex table 
public function destroyProduct($id)
{
    $product = Unisex::findOrFail($id);

    if ($product->image_url && Storage::exists('public/' . $product->image_url)) {
        Storage::delete('public/' . $product->image_url);
    }

    $product->delete();
    return redirect()->back()->with('success', 'Product deleted successfully!');
}
}
