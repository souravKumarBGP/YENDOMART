<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Logic to create a method for showing hompe page
    public function index(){
        return view("home");
    }
}
