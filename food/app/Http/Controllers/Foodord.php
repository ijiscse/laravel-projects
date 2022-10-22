<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\user;    
//use App\Models\member;
use Route\web;
class Foodord extends Controller
{
    //
    function takevalue(){
    $user=user::all();
    //$mem=member::all();
   //echo $mem;
    return view('list',['data'=>$user]);
 
}
function delete($slid){
$data=user::find($slid);
$data->delete();
return redirect("list");


}



}
