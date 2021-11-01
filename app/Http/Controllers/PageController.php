<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // About Us
    function about_us(){
        return view('about_us');
    }

    // About Us
    function contact_us(){
        return view('contact_us');
    }
}
