<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function addToCart($id,Request $request)
    {
        if (Auth::user()) {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $id;
            $cart->quantity = $request->product_quantity;

            $product = Product::find($id);

            $cart->unit_price = $product->product_price;
            $cart->save();

            return back()->with('message','Product Added Successfully');

        }else{
            return redirect('/login');
        }
    }
}
