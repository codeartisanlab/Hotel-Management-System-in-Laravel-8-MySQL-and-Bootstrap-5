<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('home');
});

// Admin Dashboard
Route::get('admin', function(){
    return view('dashboard');
});

// RoomType Routes
Route::get('admin/roomtype/{id}/delete',[RoomtypeController::class,'destroy']);
Route::resource('admin/roomtype',RoomtypeController::class);
