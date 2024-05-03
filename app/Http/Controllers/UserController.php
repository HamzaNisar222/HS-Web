<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Family;
use App\Models\Product;
use App\Models\Brand;


class UserController extends Controller
{
    public function index(){
        $categories = Category::all();
        $families=Family::All();
        $products=Product::All();
        $brands=Brand::All();


        return view("user.home",compact('categories', 'families' , 'products','brands'));
    }

    public function category_family($id){
      $category = Category::findOrFail($id);
      $families = Family::where('category_id',$id)->get();
      return view("user.category.category_family",compact('category','families'));
    }
    public function family_product($id){
        $family = Family::findOrFail($id);
        $products = Product::where('family_id',$id)->get();
        return view("user.category.family_product",compact('family','products'));
    }
}
