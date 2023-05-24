<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data',[dummyAPI::class, 'getData']);

Route::get('list/{id?}',[DeviceController::class, 'list']); //To pass optional param we use ?

Route::post('add',[DeviceController::class, 'add']); //To pass data we use post
Route::put('update',[DeviceController::class, 'update']); //To Update data we use put
Route::delete('delete/{id}',[DeviceController::class, 'delete']); //To Delete data we use delete

Route::get('search/{name}',[DeviceController::class, 'search']); //To search data we use get

Route::get('validate',[DeviceController::class, 'testData']); //To validate data we use get



