<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Logic to create a method for showing hompe page
    public function index(){

        // Get the categories data
        /*
            * $categories_data = Categories::get(["name", "slug", "category_img"]);
            * This category data show globaly from AppServiceProvider.php
        */
        
        // Get the brands data  
        /*
            * $brands_data = Brand::get(["name", "slug", "brand_img"]);
            * This brand data show globaly from AppServiceProvider.php
        */
        
        // Get the products data
        $top_selling_products = Product::where("top_selling_position", "!=", "0")->inRandomOrder()->limit(12)->get(["id", "name", "slug", "product_status", "selling_price", "brand_name", "thumbnail_img"]);
        // Get the laptops product data
        $laptop_products_data = Product::where("category_name", "like", "%laptops%")->inRandomOrder()->limit(12)->get(["id", "name", "slug", "product_status", "selling_price", "category_name", "brand_name", "thumbnail_img"]);
        // Get the led moniors and cpu data
        $led_monitors_CPU = Product::where("category_name", "like", "%led monitor%")->inRandomOrder()->orwhere("category_name", "like", "%cpu%")->limit(12)->get(["id", "name", "slug", "product_status", "selling_price", "category_name", "brand_name", "thumbnail_img"]);
        // Get the phone and tablets data
        $phones_tablets = Product::where("category_name", "like", "%phone%")->orwhere("category_name", "like", "%tablet%")->inRandomOrder()->limit(12)->get(["id", "name", "slug", "product_status", "selling_price", "category_name", "brand_name", "thumbnail_img"]);
        // Get the accessories data
        $accessories = Product::where("category_name", "like", "%accessorie%")->inRandomOrder()->limit(12)->get(["id", "name", "slug", "product_status", "selling_price", "category_name", "brand_name", "thumbnail_img"]);
        
        return view("home", compact("top_selling_products", "laptop_products_data", "led_monitors_CPU", "phones_tablets", "accessories"));
    }
}
