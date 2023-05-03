<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;


        if($request->hasFile('product_image')){
            $image = $request->file('product_image');
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('product/images/',$image_new_name);
            // storing name
            $product->product_image = 'product/images/'.$image_new_name;
        }else{
            $product->product_image = 'product/images/default.jpg';
        }
        $product->save();

        return back()->with('message','Product Saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::latest()->get();
        return view('admin.product.productEdit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;


        if($request->hasFile('product_image')){
            $image = $request->file('product_image');
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('product/images/',$image_new_name);
            // storing name
            $product->product_image = 'product/images/'.$image_new_name;
        }else{
            $product->product_image = 'product/images/default.jpg';
        }
        $product->update();

        return redirect('products')->with('message','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('message','Product Deleted Successfully');
    }
}
