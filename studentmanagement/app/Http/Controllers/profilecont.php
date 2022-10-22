<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

echo "<h1> this is my first web test with laravel</h1>";
class profilecont extends Controller
{

    function views(){
        echo "databse content";

        $users=mydb::all();
      //  echo $users;
        $x=5;
        $y=3;
if($x==5){
          return view('profile' , ['users'=>$users]);
    }
    else{
        echo "<br>data not found";
    }

}

}
?>
