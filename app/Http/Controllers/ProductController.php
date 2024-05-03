<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Family;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class ProductController extends Controller
{




    public function store(Request $request){


        $request->validate([
            'family_id' => 'required|exists:families,id',
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed

        ]);

       // Handle file upload
       $imageName = $request->file('image')->getClientOriginalName();
       $request->file('image')->move(public_path('product_images'), $imageName);
        // Create family
        $product = new Product();
        $product->family_id = $request->family_id;
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->image = 'product_images/' . $imageName; // Save the image path in the database
        $product->save();
        Alert::success('Product Added', 'Product Added Successfully');
        return redirect()->route('admin.show.products')->with('success', 'Family added to category successfully!');
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'family_id' => 'required|exists:families,id',
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed
        ]);

        // Find the product by ID
        $product = Product::findOrFail($id);

        // Update product data
        $product->family_id = $request->family_id;
        $product->name = $request->product_name;
        $product->description = $request->product_description;

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Handle file upload
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('product_images'), $imageName);
            $product->image = 'product_images/' . $imageName; // Save the new image path
        }

        // Save the updated product
        $product->save();

        Alert::success('Update Successfully', 'Product Updated Successfully.');

        // Redirect back with success message
        return redirect()->route('admin.show.products')->with('success', 'Product updated successfully!');
    }

    public function show_update($id){
        $families= Family::all();
        $product = Product::findOrFail($id); // Fetch the brand by its ID
        return view('admin.products.updateproducts', compact('product' , 'families')); // Pass the brand to the view

    }

    public function show(){
        $products= Product::all();
        return view('admin.products.showproducts', compact('products'));
    }
    public function delete($id){
        $product = Product::findOrFail($id);

        // Delete category image from storage
        if (File::exists($product->image)) {
            File::delete($product->image);
        }

        $product->delete();
        Alert::success('Product Deleted', 'Product Deleted Successfully');
        return redirect()->route('admin.show.products')->with('success', 'Category deleted successfully!');
    }



    public function index(){
        $families= Family::all();
        return view('admin.products.addproduct' , compact('families'));
    }
}
