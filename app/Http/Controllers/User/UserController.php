<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('user.index');
    }

    function viewProduct($id){
        return view('user.produtView',compact('id'));
    }
}
