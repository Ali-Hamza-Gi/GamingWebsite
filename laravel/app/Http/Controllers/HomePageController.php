<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index(Request $request){
        return view("website.home");
    }
}
