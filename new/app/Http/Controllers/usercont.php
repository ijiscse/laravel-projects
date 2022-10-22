<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class usercont extends Controller
{
    public $users;
    public $result;
    //
    function index(){

        echo "hi my friend , this is your databasae connection"."<hr>";
        $users = DB::select('select * from mydb');
        return view('member',['hello'=>$users]);
     

 
      
      /*print_r($users);
      echo "<br>";
      $array = array('This','is','a','string');
	$string = implode(" ",$array);
	echo $string;*/    
      


    }
}
