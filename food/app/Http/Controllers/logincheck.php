<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\user;
use Route\web;

class logincheck extends Controller
{
    //
    function login(Request $req){

$data=$req->input(); 
$req->session()->put('user',$data['user']);
return redirect('list');
        
        session_start();

$conn=mysqli_connect("localhost","root","","library");
$query=mysqli_query($conn,"select * from logins where user='ijiscse@gmail.com' and password='hello@123' ");
$row=mysqli_fetch_array($query);
echo $row[0];
/* $_SESSION['user']=$row[0];
if(isset($_SESSION['user'])){
    return redirect('list');
} */



    }
}
