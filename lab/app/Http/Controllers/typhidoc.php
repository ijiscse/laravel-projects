<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;

use App\Models\typhi;

class typhidoc extends Controller
{
    //
    function typho(){

           
         $id=$_POST['id'];
        $data=typhi::all();

        return view('typhidoc',['data'=>$data,'id'=>$id]);
    }
}
