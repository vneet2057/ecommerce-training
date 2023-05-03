<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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
