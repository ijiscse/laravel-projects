<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Route\web;

class logcheck extends Controller
{
    //
    function login(){
        session_start();
        $conn=mysqli_connect("localhost","root","","library");
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $_SESSION['i']=$user;
        $_SESSION['i']=$pass;
       

        $query=mysqli_query($conn,"select * from logins");
        $row=mysqli_fetch_array($query);
        
        if($user==$row[0]&&$pass==$row[1]){

            return redirect("all");
            
        }
        else{
            return view("welcome");
        }


    }
}
