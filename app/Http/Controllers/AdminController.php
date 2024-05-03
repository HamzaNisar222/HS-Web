<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Family;
use App\Models\Product;
use App\Models\Brand;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getCategoryData()
{
    $categoryCount = Category::count();
    $familyCount = Family::count();
    $productCount = Product::count();

    $categoryFamiliesCount = Category::withCount('families')->get(['id', 'name']);
    $familyProductsCount = Family::withCount('products')->get(['id', 'name']);

    return [
        'categoryCount' => $categoryCount,
        'familyCount' => $familyCount,
        'productCount' => $productCount,
        'categoryFamiliesCount' => $categoryFamiliesCount,
        'familyProductsCount' => $familyProductsCount,
    ];
}
public function index()
{
    $chartData = $this->getCategoryData();


    return view("admin.home", compact('chartData'));
}
}
