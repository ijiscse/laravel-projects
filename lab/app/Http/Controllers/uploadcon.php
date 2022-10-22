<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blooduser;
use Illuminate\Support\Facades\Route;
use Route\web;

class uploadcon extends Controller
{
    //
    function upload(Request $req){
        $data=new blooduser;
        $data->pname=$req->name;
         $data->sex=$req->sex;
          $data->age=$req->age;
           $data->docname=$req->doct;
            $data->labcode=$req->code;
             $data->recd=$req->date1;
             $data->repd=$req->date2;
$data->haemo=$req->haemo;
$data->tcount=$req->leoco;
$data->neutro=$req->neutro;
$data->lympho=$req->lympho;
$data->eosin=$req->eosin;
$data->mono=$req->mono;
$data->baso=$req->baso;
$data->erythro=$req->erythro;

$data->save();
$use=blooduser::all();


echo '<p align="center" class="success">upload succesful</p>';
return view('welcome');




    }

}
