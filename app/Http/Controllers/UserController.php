<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){
        // return view('users',['users'=>'sagan']);

        $data = ['Alice', 'Bob', 'Charlie'];
        return view('users', ['users'=>$data]);
    }
}
