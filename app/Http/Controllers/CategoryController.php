<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;



class CategoryController extends Controller
{
  // ADD CATEGORY VIEW
    public function show(){
    $categories= Category::all();
    return view('admin.category.show_category', compact('categories'));
    }
    public function index(){
    return view('admin.category.addcategory');
    }
    // ADD CATEGORY POST REQUEST
    public function store(Request $request){
      $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed
     ]);

     // Handle file upload
     $imageName = $request->file('image')->getClientOriginalName();
     $request->file('image')->move(public_path('category_images'), $imageName);

     // Create category
     $category = new Category();
      $category->name = $request->name;
     $category->description = $request->description;
     $category->image = 'category_images/' . $imageName; // Save the image path in the database
     $category->save();
     Alert::success('Category Added', 'Category Added Successfully');
     return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function show_update($id){
      $category = Category::findOrFail($id); // Fetch the brand by its ID
      return view('admin.category.updatecategory', compact('category')); // Pass the brand to the view

    }

    public function update(Request $request, $id){
      // Validate the request data
      $request->validate([
          'name' => 'required|string|max:255',
          'description' => 'required|string',
          'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed
      ]);

      // Find the category by ID
      $category = Category::findOrFail($id);

      // Update category data
      $category->name = $request->name;
      $category->description = $request->description;

      // Check if a new image is uploaded
      if ($request->hasFile('image')) {
          // Handle file upload
          $imageName = $request->file('image')->getClientOriginalName();
          $request->file('image')->move(public_path('category_images'), $imageName);

          // Delete previous image if exists
          if (File::exists(public_path($category->image))) {
              File::delete(public_path($category->image));
          }

          $category->image = 'category_images/' . $imageName; // Save the new image path
        }

      // Save the updated category
      $category->save();

      // Redirect back with success message
      Alert::success('Success', 'Category updated successfully!');
      return redirect()->route('admin.show.category')->with('success', 'Category updated successfully!');
    }





    public function delete($id){
      $category = Category::findOrFail($id);

      // Delete category image from storage
      if (File::exists($category->image)) {
        File::delete($category->image);
      }

      $category->delete();
      Alert::success('Success', 'Category deleted successfully!');
      return redirect()->back()->with('success', 'Category deleted successfully!');
   }





}
