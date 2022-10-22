<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\member;
use Route\web;


class uploadcon extends Controller
{
    //
    function upload(Request $req){
  //  return "hi brother";
 $data = new user;
       $data->first=$req->first;
       $data->last=$req->last;
       $data->mobile=$req->num;
      $data->pktnum=$req->pack;
       $data->total=$req->tot;
       $data->village=$req->vill;
       $data->pin=$req->pin;
       $data->foodtype=$req->select;
     
       $data->save(); 
    echo "<h3 align='center'>you have succesfully ordered your food item</h3>";
      return view("order");
    
}



}
