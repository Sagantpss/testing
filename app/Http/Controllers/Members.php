<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
    function operations(){
        // echo '<h1>Members</h1>';
        return DB::table('members')->get();
    }
}
