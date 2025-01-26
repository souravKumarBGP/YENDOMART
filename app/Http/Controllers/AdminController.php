<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Logic to create a methods to show admin dashbord page
    public function dashbord(){
        return view("admin.dashbord");
    }
}
