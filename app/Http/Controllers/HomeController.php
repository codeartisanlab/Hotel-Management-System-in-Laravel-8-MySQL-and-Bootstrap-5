<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home Page
    function home(){
        return View('home');
    }
}
