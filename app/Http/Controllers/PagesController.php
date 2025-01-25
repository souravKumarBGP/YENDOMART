<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
