<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typhi;
class typho extends Controller
{
    //
    function typhoid(Request $req){
         $data=new typhi;
        $data->pname=$req->name;
         $data->sex=$req->sex;
          $data->age=$req->age;
           $data->docname=$req->doct;
            $data->labcode=$req->code;
             $data->recd=$req->date1;
             $data->repd=$req->date2;
             $data->typhi1=$req->typhi1;
             $data->typhi2=$req->typhi2;
             $data->save();
             return view('welcome');

    }
}
