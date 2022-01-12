<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    // Show Product
    public function showProduct($id = null)
    {
        if ($id == '') {
            $product = Product::get();
            return response()->json(['products' => $product], 200);
        } else {
            $product = Product::find($id);
            return response()->json(['products' => $product], 200);
        }
    }
}
