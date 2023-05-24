<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    //

    function getjsonData2(){
        $data2 = Http::get('https://dummy.restapiexample.com/api/v1/employees');
        return view('about', ['products'=>$data2['data']]);
    }
}
