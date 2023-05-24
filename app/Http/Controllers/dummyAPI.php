<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData(){
        return ["name"=>"Sagan","age"=>20,"gender"=>"male","address"=>"Hno.123 street 122","state"=>"Delhi","country"=>"India"];
    }
}
