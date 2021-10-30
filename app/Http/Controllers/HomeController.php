<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;
use App\Models\Service;
class HomeController extends Controller
{
    // Home Page
    function home(){
        $services=Service::all();
        $roomTypes=RoomType::all();
        return View('home',['roomTypes'=>$roomTypes,'services'=>$services]);
    }

    // Service Detail Page
    function service_detail(Request $request, $id){
        $service=Service::find($id);
        return View('servicedetail',['service'=>$service]);
    }
}
