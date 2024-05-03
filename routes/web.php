<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

use App\Http\Controllers\FamilyController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [UserController::class, 'index'])->name('add-category');



// Routes related Admin
Route::name('admin.')->prefix('admin')->middleware(['admin'])->group(function () {


    Route::get('/admin/home', [AdminController::class, 'index'])->name('home');

    // Routes related Category

    Route::get('/addcategory', [CategoryController::class, 'index'])->name('add-category');
    Route::get('/showcategory', [CategoryController::class, 'show'])->name('show.category');
    Route::delete('/deletecategory/{id}', [CategoryController::class, 'delete'])->name('delete-category');

    Route::post('/storecategory', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/{id}', [CategoryController::class,'update'])->name('categories.update');
    Route::get('/updateCategory/{id}',[CategoryController::class, 'show_update'])->name('update.category');



    // routes related families
    Route::get('/addfamily', [FamilyController::class, 'index'])->name('add.families');
    Route::get('/showfamilies', [FamilyController::class, 'show'])->name('show.families');
    Route::post('/storefamilies', [FamilyController::class, 'store'])->name('families.store');
    Route::delete('/deletefamily/{id}', [FamilyController::class, 'delete'])->name('delete-family');
    Route::put('/families/{id}', [FamilyController::class, 'update'] )->name('families.update');
    Route::get('/updateFamily/{id}',[FamilyController::class, 'show_update'])->name('update.family');



    // routes related products
    Route::get('/addproduct', [ProductController::class, 'index'])->name('add.product');
    Route::get('/showproducts', [ProductController::class, 'show'])->name('show.products');
    Route::post('/storeproducts', [ProductController::class, 'store'])->name('products.store');
    Route::delete('/deleteproduct/{id}', [ProductController::class, 'delete'])->name('delete-product');
    Route::get('/updateproducts/{id}',[ProductController::class, 'show_update'])->name('update.product');
    Route::put('/productssupdate/{id}', [ProductController::class, 'update'])->name('products.update');

    // ROUTES RELATED BRANDS
    Route::get('/addbrand',[BrandController::class, 'index'])->name('add.brand');
    Route::post('/storebrands', [BrandController::class, 'store'])->name('brands.store');
    Route::get('/showbrands', [BrandController::class, 'show'])->name('show.brands');
    Route::delete('/deletebrand/{id}', [BrandController::class, 'delete'])->name('delete-brand');
    Route::get('/updatebrand/{id}',[BrandController::class, 'show_update'])->name('update.brand');
    Route::put('/admin/brandsupdate/{id}', [BrandController::class, 'update'])->name('brands.update');





});

// Routes Related user side
Route::name('user.')->prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/showrelatedfamilies/{id}', [UserController::class, 'category_family'])->name('show.category.families');
    Route::get('/showrelatedproducts/{id}', [UserController::class, 'family_product'])->name('show.families.products');


});
