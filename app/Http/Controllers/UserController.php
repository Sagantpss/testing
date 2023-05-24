<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    // function index(){
    //     // return view('users',['users'=>'sagan']);

    //     $data = ['Alice', 'Bob', 'Charlie'];
    //     return view('users', ['users'=>$data]);
    // }

    function getData(Request $request){
        return $request->input();
        echo"Form Submit";
    }

    function index(){
        return DB::select('select * from registration');
    }

    function getjsonData(){
        $data= Http::get('https://dummyjson.com/products/category/smartphones')->collect();
        return view('users', ['collection'=>$data['products']]);
    }

}
