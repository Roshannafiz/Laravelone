<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        return view('frontend.cart');
    }

    public function addToCart(Product $product)
    {
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $product->id => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'sealprice' => $product->seal_price,
                    'image' => $product->product_image,
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('message', "Item Added To Cart");
        }

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('message', "Item Added To Cart");
        }

        $cart[$product->id] = [
            'name' => $product->name,
            'quantity' => 1,
            'sealprice' => $product->seal_price,
            'image' => $product->product_image,
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('message', "Item Added To Cart");
    }
}
