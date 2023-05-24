<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class DeviceController extends Controller
{
    //
    function list($id = null){
        return $id?Device::find($id):Device::all();
    }

    function add(Request $request){

        $device = new Device;
        $device->name=$request->name;
        $device->member_id=$request->member_id;
        $result=$device->save();
        if($result){
            return ["result"=>"Data Save Successfully"];
        }else {
            return ["result"=>"Data Not Save"];
        }
    }

    function update(Request $request){
        $device = Device::find($request->id); //Find the data by id
        $device->name=$request->name;
        $device->member_id=$request->member_id;
        $result=$device->save();
        if($result){
            return ["result"=>"Data Update Successfully"];
        }else {
            return ["result"=>"Data Update Failed"];
        }
    }

    function delete($id){
        $device = Device::find($id);
        $result = $device->delete();
        if($result){
            return ["result"=>"Data Delete Successfully"];
        }else {
            return ["result"=>"Data Delete Failed"];
        }
    }

    function search($name){
        $result = Device::where('name','like','%'.$name.'%')->get();
        if(count ($result) > 0){
            return $result;
        }else {
            return ["result"=>"Data Not Found"];
        }
    }

    function testData(Request $request){
        $rules = array(
            "member_id" => "required | max:4",
            "name" => "required"
        );
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            // return $validator->errors();
            return response()->json($validator->errors(),401);
        }else{
            // return ["a"=>"x"];
            $device = new Device;
            $device->name = $request->name;
            $device->member_id = $request->member_id;
            $result = $device->save();
            if($result){
                return ["result"=>"Data Save Successfully"];
            }else{
                return ["result"=>"Data Not Save"];
            }
        }
    }
}
