<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\Members;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/users',[UserController::class,'index']);

// Route::view('login', 'users')->middleware('protectPage');
// Route::post('users', [UserController::class, 'getData']);

Route::get('users', [UserController::class, 'getjsonData']);
Route::get('/about', [AboutController::class, 'getjsonData2']);


// Middleware pages
Route::view('home', 'home')->middleware('protectPage');
// Route::view('about', 'about')->middleware('protectPage');
Route::view('noaccess', 'noaccess');

Route::group(['middleware' => ['protectPage']], function () {

    Route::get('/', function () {
        return view('welcome');
    });
});


// Route::view('login', 'login');
Route::view('profile', 'profile');
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user', null);
    }
    return redirect('/login');
});
Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }
    return view('login');
});
Route::post('user',[UserAuth::class,'userLogin']);

Route::view('upload', 'upload');
Route::post('upload',[UploadController::class,'index']);

Route::get('list', [MemberController::class, 'show']);

// Add - Delete - Edit Data
Route::post('add', [MembersController::class, 'addData']);
Route::view('add', 'addmember');
Route::get('list', [MembersController::class, 'list']);
Route::get('delete/{id}', [MembersController::class, 'delete']);
Route::get('edit/{id}', [MembersController::class, 'showData']);
Route::post('edit', [MembersController::class, 'update']);

// Operations

Route::get('operations', [MembersController::class, 'operations']);
