<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Logic to create a method to handle AJAX request for stoe a new user
    public function store(Request $request){

        // Logic to check email is unique or not if email is not unique then return the error
        $email_exist = User::where("email", $request->email)->get("email");

        if(count($email_exist) >= 1){
            return json_encode(["status"=> "email_exist"]);
        }else{

            // Logic to apply server side validation
            $request->validate([
                "full_name" => "required|max:100|string",
                "email" => "required|email|unique:users,email|max:100",
                "password" => "required|max:100|min:8",
                "conf_password"=> "required|same:password",
                "profile_img" => "required|mimetypes:image/jpeg,image/png,image/jpg|max:1024"
            ], [
                "full_name.required" => "Full name is required. Please provide your full name.",
                "full_name.max" => "Your full name cannot exceed 100 characters. Please use a shorter name.",
                "email.required" => "Email address is required. Please enter a valid email address.",
                "email.unique" => "This email address is already registered. Please use a different email address.",
                "email.max" => "Email address cannot exceed 100 characters. Please use a shorter email address.",
                "password.required" => "A password is required. Please create a new password.",
                "password.max" => "Password must be between 8 and 100 characters long.",
                "conf_password.required"=> "Confirm passwrod is required. Please enter same password",
                "conf_password.same"=> "Enter same password.",
                "profile_img.required" => "A profile image is required. Please upload your profile image.",
                "profile_img.mimetypes" => "The profile image must be in JPG, JPEG, or PNG format.",
                "profile_img.max" => "The profile image size cannot exceed 1MB. Please upload a smaller image."
            ]);
    
            // Save profile image into server file
            $path = $request->file("profile_img")->store("image/profile_img", "public");
            
            // stroe data into database
            $result = User::create([
                "full_name"=> $request->full_name,
                "email"=> $request->email,
                "password"=> $request->password,
                "profile_img"=> $path
            ]);
    
            if($result){
                return json_encode(["status"=> "success"]);
            }else{
                return json_encode(["status"=> "error"]);
            }
        }
        

    }
}
