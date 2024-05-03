<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function index(){
        return view('admin.Brands.addbrand');
    }

    public function show_update($id){
        $brand = Brand::findOrFail($id); // Fetch the brand by its ID
        return view('admin.Brands.updatebrands', compact('brand')); // Pass the brand to the view

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed
        ]);

        // Handle file upload
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('brand_images'), $imageName);

        // Create brand
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->image = 'brand_images/' . $imageName; // Save the image path in the database
        $brand->save();
        Alert::success('Brand Added', 'Brand Added Successfully');

        return redirect()->route('admin.show.brands')->with('success', 'Brand added successfully!');
    }

    public function show(){
        $brands= Brand::all();
        return view('admin.Brands.showbrands', compact('brands'));
    }
    public function delete($id){
        $brand = Brand::findOrFail($id);

        // Delete brand image from storage
        if (File::exists($brand->image)) {
            File::delete($brand->image);
        }

        $brand->delete();
        Alert::success('Brand Deleted', 'Brand Deleted Successfully');

        return redirect()->route('admin.show.brands')->with('success', 'Brand deleted successfully!');
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed
        ]);

        // Find the brand by ID
        $brand = Brand::findOrFail($id);

        // Update brand data
        $brand->name = $request->name;

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image from storage
            if (File::exists($brand->image)) {
                File::delete($brand->image);
            }

            // Handle file upload
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('brand_images'), $imageName);
            $brand->image = 'brand_images/' . $imageName; // Save the new image path
        }

        // Save the updated brand
        $brand->save();

        Alert::success('Brand Updated', 'Brand Updated Successfully');
        // Redirect back with success message
        return redirect()->route('admin.show.brands')->with('success', 'Brand updated successfully!');
    }
}
