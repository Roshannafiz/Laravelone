<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();

        return view('frontend.checkout', compact('count'));
    }
}

