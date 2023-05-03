<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin.index');
    }

    function categories()
    {
        $categories = Category::latest()->get();
        return view('admin.category.categoryList',compact('categories'));
    }

    function products()
    {
        $categories = Category::latest()->get();
        $products = Product::latest()->get();
        return view('admin.product.productList',compact('categories','products'));
    }
}
