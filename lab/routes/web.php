<?php

use Illuminate\Support\Facades\Route;
use App\model\blooduser;
use App\Http\Controllers\uploadcon;
use App\Http\Controllers\alldb;
use App\Http\Controllers\sepdocon;
use App\model\typhi;
use App\Http\Controllers\typho;
use App\Http\Controllers\typhidoc;
use App\Http\Controllers\logcheck;


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
Route::post('/uploadcon',[uploadcon::class,'upload']);
Route::get('/all',[alldb::class,'takevalue']);

Route::post('/sepdoc',[sepdocon::class,'document']);
Route::post('/typhoid',[typho::class,'typhoid']);
Route::post('/typhidoc',[typhidoc::class,'typho']);
Route::post('logcheck',[logcheck::class,'login']);