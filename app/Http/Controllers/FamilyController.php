<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Family;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;



use Illuminate\Http\Request;

class FamilyController extends Controller
{





    public function store(Request $request){


        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'family_name' => 'required|string|max:255',
            'family_description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed

        ]);

       // Handle file upload
       $imageName = $request->file('image')->getClientOriginalName();
       $request->file('image')->move(public_path('family_images'), $imageName);
        // Create family
        $family = new Family();
        $family->category_id = $request->category_id;
        $family->name = $request->family_name;
        $family->description = $request->family_description;
        $family->image = 'family_images/' . $imageName; // Save the image path in the database
        $family->save();
        Alert::success('Family Added','Family Added Successfully');
        return redirect()->route('admin.show.families')->with('success', 'Family added to category successfully!');
    }



    public function show(){
        $families= Family::all();
        return view('admin.families.showfamilies', compact('families'));
    }
    public function delete($id){
        $family = Family::findOrFail($id);

        // Delete category image from storage
        if (File::exists($family->image)) {
            File::delete($family->image);
        }

        $family->delete();
        Alert::success('Family Deleted', 'Family Deleted Successfully');
        return redirect()->route('admin.show.families')->with('success', 'Category deleted successfully!');
    }
    public function show_update($id){
        $family = Family::findOrFail($id); // Fetch the brand by its ID
        $categories=Category::all();
        return view('admin.families.updatefamilies', compact('family','categories')); // Pass the brand to the view

    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'family_name' => 'required|string|max:255',
            'family_description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed
        ]);

        // Find the family by ID
        $family = Family::findOrFail($id);

        // Update family data
        $family->category_id = $request->category_id;
        $family->name = $request->family_name;
        $family->description = $request->family_description;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('family_images'), $imageName);
            $family->image = 'family_images/' . $imageName;
        }

        // Save the updated family
        $family->save();
        Alert::success('Family Updated', 'Family Updated Successfully');
        // Redirect back with success message
        return redirect()->route('admin.show.families')->with('success', 'Family updated successfully!');
    }



    public function index(){
        $categories= Category::all();
        return view('admin.families.addfamily' , compact('categories'));
    }
}
