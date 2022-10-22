<?php
namespace App\Http\Controllers;
use Illuminate\Http\ValidatesRequest;
use Illuminate\Support\Facades\DB;

class selectdb extends Controller
{
    public functuon show()
    {
       $hi= DB:select('select * from mydb');
        dd('$hi');
    }
}