<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    // Logic to make a method to show product filter page
    public function product_filter_page(){
        return view("pages.product_filter");
    }

    // Logic to make a method to show product details page
    public function product_details_page(){
        return view("pages.product_details");
    }

    // Logic to make a methods to show view profile page
    public function view_profile(){
        return view("pages.view_profile");
    }

    // Logic to create a methods to show my cart page
    public function my_cart(){
        return view("pages.my-cart");
    }

    // Logic to create a methods to show my cart page
    public function my_wishlist(){
        return view("pages.my-wishlist");
    }

    // Logic to create a methods to show my cart page
    public function checkout_page(){
        return view("pages.checkout");
    }

    // Logic to create a methods to show signup_login page
    public function signup_login_page(){

        return view("pages.signup_login");
    }

    // Logic to create a methods to show contact us page
    public function contact_us_page(){
        return view("pages.contact_us");
    }

    // Logic to creae a methods to show otp verify page
    public function otp_verify_page(){
        
        // Logic to check otp is send or not if otp is not send then show user login page
        if(session()->has("otp_dedline")){
            return view("pages.otp_verify");
        }else{
            return redirect()->route("pages.signup_login_page");
        }
    }
}
