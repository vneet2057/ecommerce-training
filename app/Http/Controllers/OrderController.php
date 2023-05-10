<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order =  new Order();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->note = $request->note;
        $order->payment_method = $request->payment_method;

        $order->save();

        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $total = 0;
        foreach ($carts as $cart) {
            $order_details = new OrderDetails();
            $order_details->order_id = $order->id;
            $order_details->product_id = $cart->product_id;
            $order_details->quantity = $cart->quantity;
            $order_details->unit_price = $cart->unit_price;
            $order_details->save();
            $cart->delete();
            $total += $order_details->quantity * $order_details->unit_price;
        }

        if ($request->payment_method == 'khalti') {
            $url = '/pay-with-khalti/' . $total . '/' . $order->id;
            return redirect($url);
        }
        return redirect()->back()->with('message', 'Sucessfully Ordered');
    }

    function payWithKhalti($price, $id)
    {
        return view('user.payWithKhalti', compact('price', 'id'));
    }

    function changeOrderStatus($id)
    {
        $order  = Order::find($id);
        $order->payment_status = 'paid';
        $order->update();

        return redirect('/');
    }
}
