<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;

use App\Models\blooduser;
use App\Models\typhi;


class alldb extends Controller
{
    //
    function takevalue(){
    $user=blooduser::all();
    $mem=typhi::all();
   //echo $mem;
    return view('list',['data'=>$user,'mem'=>$mem]);

}
}
?>
