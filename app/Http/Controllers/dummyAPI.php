<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;

class dummyAPI extends Controller
{
    //
    function getData(){
        // return ["name"=>"Sagan","age"=>20,"gender"=>"male","address"=>"Hno.123 street 122","state"=>"Delhi","country"=>"India"];

        $data = DB::table('cities')->get();
        return "$data";

    }

    function getData2(){

        // $tables = DB::table('table1')
        //     ->join('table2', 'table1.id', '=', 'table2.table1_id')
        //     ->select('table1.*', 'table2.field1', 'table2.field2')
        //     ->get();

        $tables = DB::table('cities')
        ->crossJoin('countries')
        ->get();

        return response()->json($tables);
    }

    public function getData3()
    {
        $tableData = DB::table('cities')
            ->join('countries', 'cities.city_id', '=', 'countries.country_id')
            ->select('countries.*', 'cities.*')
            ->where('cities.state_id', '=', 1)
            ->get();

            return response()->json($tableData);
    }

}
