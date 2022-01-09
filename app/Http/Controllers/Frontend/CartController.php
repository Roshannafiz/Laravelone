<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Session;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $userCartItems = Cart::userCartItems();
        return view('frontend.cart', compact('userCartItems'));
    }

    public function addtocart(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // Generate Session Id
            $session_id = Session::get('session_id');
            if (empty($session_id)) {
                $session_id = Session::getId();
                Session::put('session_id', $session_id);
            }

            // Check Product Already Exists In User Cart
            if (Auth::check()) {
                //User Is Logged In
                $countProduct = Cart::where([
                    'product_id' => $data['product_id'],
                    'user_id' => Auth::user()->id,
                ])->count();
            } else {
                //User Is Not Logged In
                $countProduct = Cart::where([
                    'product_id' => $data['product_id'],
                    'session_id' => Session::get('session_id'),
                ])->count();
            }

            if ($countProduct > 0) {
                return redirect()->back()->with('error_message', "This Product Alredy Added In Cart!");
            }

            // Save Product In Cart
            $cart = new Cart();
            $cart->session_id = $session_id;
            $cart->product_id = $data['product_id'];
            $cart->quantity = $data['quantity'];
            $cart->save();
            return redirect()->back()->with('message', "Product Added In Cart");
        }
    }
}
