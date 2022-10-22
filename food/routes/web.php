<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Foodord;
use App\Http\Controllers\uploadcon;
use App\Http\Controllers\logincheck;

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

Route::get('/order', function () {
    return view('order');
});
Route::get('/contact', function () {
    return view('contact');
});
//Route::group([middleware->['protectPage']],function(){
  //  return view("twen");
//});
Route::post('/uploadcon',[uploadcon::class,'upload']);
Route::get('/list',[Foodord::class,'takevalue']);
Route::get('delete/{slid}',[Foodord::class,'delete']);
//Route::view("login",'login');
Route::get('login',function(){
    if(session()->has('user')){
        return redirect('list');
    }
    return view('login');
});
Route::get('/logout',function(){
    if(session()->has('user')){
        session()->pull('user');
return redirect('login');
    }
    else{
        return view("login");
    } 
    
});
Route::post('logincheck',[logincheck::class,'login']);
Route::view("twen","twen");

