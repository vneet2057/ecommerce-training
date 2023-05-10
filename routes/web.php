<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[UserController::class,'index']);

Route::get('/view-product/{id}',[UserController::class,'viewProduct']);


Route::get('/pay-with-khalti/{price}/{id}',[OrderController::class,'payWithKhalti']);


Route::get('/change-order-status/{id}',[OrderController::class,'changeOrderStatus']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin route
Route::get('/dashboard', [AdminController::class, 'index']);

// category routes
Route::get('/categories',[AdminController::class,'categories']);
Route::post('/add-category',[CategoryController::class,'store']);
Route::get('/edit-category/{id}',[CategoryController::class,'edit']);
Route::post('/update-category/{id}',[CategoryController::class,'update']);
Route::get('/delete-category/{id}',[CategoryController::class,'destroy']);


// product routes
Route::get('/products',[AdminController::class,'products']);
Route::post('/add-product',[ProductController::class,'store']);
Route::get('/edit-product/{id}',[ProductController::class,'edit']);
Route::post('/update-product/{id}',[ProductController::class,'update']);
Route::get('/delete-product/{id}',[ProductController::class,'destroy']);


// add to cart 
Route::post('/add-to-cart/{id}',[CartController::class,'addToCart']);
// checkout
Route::get('/checkout',[CartController::class,'checkout']);
// order 
Route::post('/order',[OrderController::class,'store']);

Route::get('/orders',[AdminController::class,'orders']);



