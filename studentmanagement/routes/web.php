<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stucontrol;
use App\Http\Controllers\profilecont;
use App\Http\Controllers\logcontrol;


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
Route::post('stu', [stucontrol::class,'Uppload']);
Route::get('/profilecont', [profilecont::class,'views']);
Route::get('/login',function(){
    return view('login');
});
Route::post('/logcon', [logcontrol::class,'log']);
