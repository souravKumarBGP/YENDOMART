<?php

namespace App\Http\Controllers;

use App\Mail\OtpVerificationMaler;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

    // Logic to make a methods to handle user login operations
    public function login_request(Request $request){
        
        // session()->flush();
        
        // Logic to apply server side validation
        $credentials = $request->validate([

            "email"=> "required|email|exists:users,email|max:100",
            "password"=> "required|max:100|min:8"
        ],[

            "email.exists"=> "This email is not registred. Please signup your email.",
        ]);

        // Loic to apply validation for check account is active or not
        $is_active = User::where("email", $credentials["email"])->where("status", "active")->get(["status", "full_name", "password"]);

        if(count($is_active) === 1){
            if(Hash::check($credentials["password"], $is_active[0]->password)){

                // logic to generate the otp and save into session 
                $otp = rand(100000, 999999);
                session(["otp"=> base64_encode($otp)]);
                session(["full_name"=> base64_encode($is_active[0]->full_name), "e"=> base64_encode($credentials["email"]) ,"p"=> base64_encode($credentials["password"])]); // Save email and password into session for authentication
                session(["otp_dedline"=> now()->addMinutes(5)->timestamp]);
                
                // Logic to send a otp for mail verification
                Mail::to($credentials["email"])->send(new OtpVerificationMaler($is_active[0]->full_name, $credentials["email"], $otp));

                return redirect()->route("pages.otp_verify");
                
            }else{
                return back()->withErrors(["password"=> "Password cannot be matched. Please enter currect password."]);

            }
        }else{
            return back()->withErrors(["email"=> "Email not activated. Contact support at 9065608408 to enable login."]);
            
        }
        
    }

    // Logic to create a methods to handle ajax request for verify otp
    public function otp_verification_request(Request $request){

        // Logic to perform operations for forget the otp 
        if(time() > session("otp_dedline")){
            session()->forget("otp");
        }

        // Logic to check otp is expire or not
        if(session()->has("otp")){
            
            // Logic to check otp is matched or not
            $otp = base64_decode(session("otp"));
            if($otp == $request->otp){

                $email = base64_decode(session("e")); // Get the email from session
                $password = base64_decode(session("p")); // Get the password for session
                
                if(Auth::attempt(["email"=> $email, "password"=> $password])){

                    session()->forget(["otp", "otp_dedline", "e", "p", "full_name"]); // forget the folling session
                    session()->regenerate();

                    // Logic to check user is login or admin is login
                    if(Auth::user()->role == "admin"){
                        return json_encode(["status"=> "veryfied", "user"=> "admin_login"]);

                    }elseif(Auth::user()->role == "customer"){
                        return json_encode(["status"=> "veryfied", "user"=> "user_login"]);
                    }
                    
                }else{

                    return json_encode(["status"=> "invalid_credentials"]);
                }

            }else{
                return json_encode(["status"=> "wrong_otp"]);

            }
            
        }else{
            return json_encode(["status"=> "otp_expire"]);

        }

    }

    // Logic to create a methods to handle resend otp request
    public function resend_opt_request(Request $request){

        // logic to generate the otp and save into session 
        $otp = rand(100000, 999999);
        session(["otp"=> base64_encode($otp)]);
        session(["otp_dedline"=> now()->addMinutes(5)->timestamp]);

        
        $full_name = base64_decode(session("full_name")); // Get the password for session
        $email = base64_decode(session("e")); // Get the email from session
        
        // Logic to send a otp for mail verification
        Mail::to($email)->send(new OtpVerificationMaler($full_name, $email, $otp));

        return json_encode(["status"=> "success"]);

    }

    // Logic to create a methods to handle ajax request for update user profile
    public function update_profile_info_request(Request $request){

        try{

            // Logic to apply server side validation
            $credentials = $request->validate([
                "full_name" => "required|max:100|string",
                "phone"=> "required|max:10|min:10",
                "state"=> "required|max:100",
                "pincode"=> "required|max:100",
                "district"=> "required|max:100",
                "famous_place"=> "required|max:255",
                "delivery_address"=> "required|max:500"
            ]);
            
            // Logic to perform update operations
            $result = User::findorfail(Auth::id())->update($credentials);

            if($result){
                return json_encode(["status"=> "success"]);
            }else{
                return json_encode(["status"=> "error"]);
            }

        }catch(\Exception $e){
            
            Log::alert("Something went wrong please try again latter.");
            return json_encode(["status" => $e->getMessage()]);
        }
        
        
    }

    // Logic to create a methods to handle ajax request for update profile image
    public function update_profile_image_request(Request $request){

        // Get old profile image path and unlink it
        $old_image_path = public_path().'/storage/'.Auth::user()->profile_img;
        unlink($old_image_path);

        // Update the new path
        $path = $request->file("profile_img")->store("/image/profile_img", "public");
        $result = User::findorFail(Auth::id())->update([
            "profile_img"=> $path
        ]);
        return json_encode(["status"=> "success", "path"=> asset("/storage/".$path)]);
    }

    // Logic to create a methods to handle ajax request for update password
    public function update_password_request(Request $request){

        $result = User::find(Auth::id())->update([
            "password"=> $request->password
        ]);
        return json_encode(["status"=> "success"]);
    }
}
