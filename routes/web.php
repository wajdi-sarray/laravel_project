<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('product');
//});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
  Session::forget('user');
  return redirect('login');
});
Route::get('/register', function () {
  return view('register');
});

Route::get('/','App\Http\Controllers\ProductController@index');
Route::get(' detail/{id}','App\Http\Controllers\ProductController@detail');
Route::post(' add_to_cart','App\Http\Controllers\ProductController@add_cart');
Route::post("/register",'App\Http\Controllers\UserController@register');
Route::post("/login",'App\Http\Controllers\UserController@login');
Route::get("cartlist",'App\Http\Controllers\ProductController@cartlist');
Route::get("removecart/{id}",'App\Http\Controllers\ProductController@removeCart');
Route::get("ordernow",'App\Http\Controllers\ProductController@ordernow');
Route::post("/orderplace",'App\Http\Controllers\ProductController@orderplace');
Route::get("/myorders",'App\Http\Controllers\ProductController@myorders');
Route::get("remove/{id}",'App\Http\Controllers\ProductController@removeProduct');
Route::get("insert/{id}",'App\Http\Controllers\ProductController@insert');
Route::get("update/{id}",'App\Http\Controllers\ProductController@update');
Route::post("/valide/{id}",'App\Http\Controllers\ProductController@valide');
Route::get("search",'App\Http\Controllers\ProductController@search');














