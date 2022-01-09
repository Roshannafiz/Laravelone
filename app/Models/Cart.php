<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Auth;
use Session;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'session_id',
        'user_id',
        'product_id',
        'quantity',
        'size',
        'color',
    ];

    public static function userCartItems()
    {
        if (Auth::check()) {
            $userCartItems = Cart::with('product')->where('user_id', Auth::user()->id)->get()->toArray();
        } else {
            $userCartItems = Cart::with('product')->where('session_id', Session::get('session_id'))->get()->toArray();
        }
        return $userCartItems;
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
