<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function all_orders()
    {
        $orders = Order::latest()->get();
        return view('admin.order.all_orders', compact('orders'));
    }

    //___________ Change Ststus Usign Ajax ___________//
    public function change_status(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = $request->status;
        $order->save();
    }

    //___________ Delete Orders ____________//
    public function destroy($id)
    {
        $detete_data = Order::find($id);
        $detete_data->delete();
        return redirect()->back()->with('message', "Order Deleted Successfully");
    }
}
