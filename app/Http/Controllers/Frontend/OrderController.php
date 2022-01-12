<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\DeliveryAddress;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'name' => Auth::user()->name,
            'invoice_no' => mt_rand(10000000, 99999999),
            'payment_type' => $request->payment_type,
            'total' => $request->total,
            'subtotal' => $request->subtotal,
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);
        $cart = Cart::where('user_id', Auth::id())->latest()->get();
        $userCartItems = Cart::userCartItems();

        foreach ($cart  as $cart) {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->product_id,
                'product_qty' => $cart->quantity,
                'created_at' => Carbon::now(),
            ]);
        }

        DeliveryAddress::insert([
            'user_id' => Auth::id(),
            'order_id' => $order_id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'pincode' => $request->pincode,
            'mobile' => $request->mobile,
            'created_at' => Carbon::now(),
        ]);

        Cart::where('user_id', Auth::id())->delete();

        return redirect('/')->with('message', "Your Order Place Successfully!");
    }
}
