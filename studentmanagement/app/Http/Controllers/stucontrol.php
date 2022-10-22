<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\mydb;
use App\Http\Controllers\profilecont;
use Route\web;




class stucontrol extends Controller
{
    function Uppload(Request $req){
       $data = new mydb;
       $data->fname=$req->first;
       $data->lname=$req->last;
       $data->uname=$req->uname;
       $data->pwd=$req->pass;
       $data->image=$req->file;
       $data->gender=$req->gender;
       $data->subject=$req->sub;
       $data->date=$req->date; 
       $data->save();
    
      return redirect('/profilecont');


    }
    
}
