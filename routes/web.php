<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//<<<<<<<<<<---------- Backend Route ------------->>>>>>>
Route::get('/admins', [AdminController::class, 'index']);
Route::post('/admin-dashboard', [AdminController::class, 'show_dashboard']);

Route::get('/dashboard', [SuperAdminController::class, 'dashboard']);
Route::get('/logout', [SuperAdminController::class, 'logout']);







//<<<<<<<<<----------- All Product Route Here ----------->>>>>>>>>>>
Route::resource('/products', ProductController::class);
//____ Edit Product __//
Route::get('/edit-cat/{id}', [ProductController::class, 'edit']);
Route::put('update-product/{id}', [ProductController::class, 'update']);

//____ Automative Add Slug When Type Name Flied ___//
Route::get('posts/check_slug', [ProductController::class, 'checkSlug'])->name('checkSlug');

//_______________ Change Ststus Product Usign Ajax _____________//
Route::get('/product-status', [ProductController::class, 'change_status'])->name('product-status');







//<<<<<<<<<----------- All Category Route Here ----------->>>>>>>>>>>
Route::resource('/categories', CategoryController::class);
//____ Edit Category __//
Route::get('/edit-cat/{id}', [CategoryController::class, 'edit']);
Route::put('update-category/{id}', [CategoryController::class, 'update']);
//_______________ Change Ststus Category Usign Ajax _____________//
Route::get('/cat-status', [CategoryController::class, 'change_status'])->name('cat-status');





//<<<<<<<<<----------- All Sub Category Route Here ----------->>>>>>>>>>>
Route::resource('/subcategories', SubCategoryController::class);
//____ Edit Sub Category __//
Route::get('/editsub-cat/{id}', [SubCategoryController::class, 'edit']);
Route::put('update-sub-category/{id}', [SubCategoryController::class, 'update']);
//_______________ Change Ststus Sub Category Usign Ajax _____________//
Route::get('/sub-cat-status', [SubCategoryController::class, 'change_status'])->name('sub-cat-status');






//<<<<<<<<<----------- All Brand Route Here ----------->>>>>>>>>>>
Route::resource('/brands', BrandController::class);
//____ Edit Brand __//
Route::get('/edit-brand/{id}', [BrandController::class, 'edit']);
Route::put('update-brand/{id}', [BrandController::class, 'update']);
//_______________ Change Ststus Brand Usign Ajax _____________//
Route::get('/brands-status', [BrandController::class, 'change_status'])->name('brand-status');







//<<<<<<<<<----------- All Unit Route Here ----------->>>>>>>>>>>
Route::resource('/units', UnitController::class);
//____ Edit Unit __//
Route::get('/edit-unit/{id}', [UnitController::class, 'edit']);
Route::put('update-unit/{id}', [UnitController::class, 'update']);
//_______________ Change Ststus Unit Usign Ajax _____________//
Route::get('/units-status', [UnitController::class, 'change_status'])->name('unit-status');






//<<<<<<<<<----------- All Size Route Here ----------->>>>>>>>>>>
Route::resource('/sizes', SizeController::class);
//____ Edit Size __//
Route::get('/edit-size/{id}', [SizeController::class, 'edit']);
Route::put('update-size/{id}', [SizeController::class, 'update']);
//_______________ Change Ststus Size Usign Ajax _____________//
Route::get('/sizes-status', [SizeController::class, 'change_status'])->name('size-status');






//<<<<<<<<<----------- All Color Route Here ----------->>>>>>>>>>>
Route::resource('/colors', ColorController::class);
//____ Edit Color __//
Route::get('/edit-color/{id}', [ColorController::class, 'edit']);
Route::put('update-color/{id}', [ColorController::class, 'update']);
//_______________ Change Ststus Color Usign Ajax _____________//
Route::get('/colors-status', [ColorController::class, 'change_status'])->name('color-status');






//____________________ Frontend Route----->>>>>
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/product', [App\Http\Controllers\Frontend\ProductController::class, 'product']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/cart', [CartController::class, 'cart']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);

Route::get('/view-product/{id}', [HomeController::class, 'view_product']);
