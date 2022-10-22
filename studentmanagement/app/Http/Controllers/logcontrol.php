<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\mydb;

class logcontrol extends Controller
{
    //
    function log(Request $req){


function pro(){
$demo=mydb::all();
session_start();
$data=new mydb();


//echo $demo;
//echo $demo[0];
$stu=$demo[2];



echo "<div>";

echo "<br><table border='1'><th>id</th><th>first name</th><th>last name</th><th>user name</th><th>password</th>";

echo "<tr><td>".$stu['stuid']."</td><td>".$stu['fname']."</td><td>".$stu['lname']."</td><td>".$stu['uname']."</td><td>".$stu['pwd']."</td></table>";
}

pro();
$con=mysqli_connect("localhost","root","","library");
$db=mysqli_query($con,"select * from mydbs where pwd=12345 ");
$row =mysqli_fetch_array($db);
while($row =mysqli_fetch_array($db)){
echo "<table border='2'><td>".$row[0]."</td><td>".$row[1]."</td><br>";
}
}
}
?>