<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\category;
use App\Http\Controllers\product;
use App\Http\Controllers\comment;
use App\Http\Controllers\indexcontroller; 

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});
/* category show */
Route::get('getcate/{id}',[indexcontroller::class,'category']);
/* search bar */
Route::post('search',[indexcontroller::class,'search']);

Route::post('comentsubmit',[indexcontroller::class,'submit']);
/* comment */
Route::get('comment/{id}',[indexcontroller::class,'comment']);
/* add post*/
  Route::post('addproduct',[indexcontroller::class,'addproduct']);
  /* home */
route::get ('home',[indexcontroller::class,'home']);
/* product_id*/
Route::get('productid/{id}',[indexcontroller::class,'productid']);
