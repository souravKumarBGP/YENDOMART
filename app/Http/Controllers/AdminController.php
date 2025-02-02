<?php

namespace App\Http\Controllers;

use App\Models\Unite;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AdminController extends Controller
{
    // Logic to create a methods to show admin dashbord page
    public function dashbord(){
        return view("admin.dashbord");
    }

    // Logic to create a methods to show unites page
    public function unites_page(){
        $data = Unite::get();
        return view("admin.unites.unites", compact("data"));
    }

    // Logic to create a methods to store new unite
    public function store_unite(Request $request){
        
        // Validate input data with server-side validation
        $credentials = $request->validate([
            "name" => "required|max:20|unique:unites,name",
        ], [
            "name.required" => "The unit name is required.",
            "name.max" => "The unit name must not exceed 20 characters.",
            "name.unique" => "This unit has already been created!",
        ]);

        // Store unit into database
        $result = Unite::create($credentials);

        // Redirect back with success or error message
        if ($result) {
            return redirect()->back()->with("success_msg", "Unit created successfully.");
        } else {
            return redirect()->back()->withErrors(["error_msg"=>"Unable to create unit. Please try again later!"]);
        }
    }

    // Logic to create a methods to destroy unite
    public function destroy_unite(string $id){
        $id = base64_decode($id);

        // Logic to perform delete operation
        $result = Unite::findorFail($id)->delete();
        if($result){
            return redirect()->back()->with("success_msg", "Unites deleted successfully.");
        }else{
            return redirect()->back()->with("error_msg", "Unable to delete unite. Please try again latter !");
        }
    }

}
