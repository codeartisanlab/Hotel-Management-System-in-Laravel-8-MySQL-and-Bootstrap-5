<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;
class HomeController extends Controller
{
    // Home Page
    function home(){
        $roomTypes=RoomType::all();
        return View('home',['roomTypes'=>$roomTypes]);
    }
}
