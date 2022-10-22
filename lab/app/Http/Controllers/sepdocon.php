<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Route;

use App\Models\blooduser;

class sepdocon extends Controller
{
    //
   
    function document(){
         $id=$_POST['id'];
        $data=blooduser::all();
        return view('sepdoc',['data'=>$data,'id'=>$id]);
    }
}
?>
