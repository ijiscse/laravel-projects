<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\selectdb;

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


Route::get('/test', [selectdb::class,'show()'] 

//show()

   // return view('welcome');
);


Route::get('/', function () {
    echo "wwelcome everyone";
    
    return view('hello');
});