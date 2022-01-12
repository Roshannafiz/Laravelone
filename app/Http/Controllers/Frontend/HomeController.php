<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\Cart;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();

        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        $products = Product::where('status', 1)->latest()->limit(6)->get();
        $products_tendy = Product::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
        return view('frontend.master', compact('products', 'count', 'products_tendy'));
    }
    public function view_product($id)
    {
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();

        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $product = Product::findOrFail($id);
        $sizes = Size::find($product->size_id);
        $colors = Color::find($product->color_id);

        // For Releted Product
        $cat_id = $product->cat_id;
        $releted_products = Product::where('cat_id', $cat_id)->limit(6)->get();

        return view('frontend.view_pages.view_product', compact('product', 'categories', 'subcategories', 'brands', 'units', 'sizes', 'colors', 'releted_products', 'count'));
    }
}
