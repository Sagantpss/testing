<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MembersController extends Controller
{
    //
    function list(){
        $data = Member::all();
        return view('addmember',['members'=>$data]);
    }

    function delete($id){
        $data = Member::find($id);
        $data-> delete();
        return redirect('list');
    }


    function showData($id){
        $data = Member::find($id);
        return view('edit',['memberdata'=>$data]);
    }

    function update(Request $req){
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        return redirect('list');
    }


    function addData(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('add');
    }


    function operations(){
        // echo '<h1>Members</h1>';
        return DB::table('members')
        ->where('id', 12)
        ->delete();
        // ->update([
        //     'name' => 'Jasmin K'
        // ]);

        // ->insert([
        //     'name' => 'Jasmin',
        //     'email' => 'mqXbG@example.com',
        //     'address' => 'Hno.98 Street 478 Goa'
        // ]);
        // ->count();
        // ->find(2);
        // ->get();
        // ->where('address','Hno.98 Street 99 India')

        // return view('list',['data'=>$data]);
    }
}
