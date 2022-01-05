<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        $products = Product::where('status', 1)->latest()->limit(6)->get();
        return view('frontend.master', compact('products'));
    }

    public function view_product($id)
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $product = Product::findOrFail($id);
        $sizes = Size::find($product->size_id);
        $colors = Color::find($product->color_id);
        return view('frontend.view_pages.view_product', compact('product', 'categories', 'subcategories', 'brands', 'units', 'sizes', 'colors'));
    }
}
