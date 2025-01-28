<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//====================== Logic to create some following routes for handle frontend logic
Route::get("/", [HomeController::class, "index"])->name("home");
// Route for handle frontend pages
Route::prefix("/pages")->controller(PagesController::class)->group(function(){
    Route::get("/product-filter", "product_filter_page")->name("pages.product_filter_page");
    Route::get("/product-details", "product_details_page")->name("pages.product_details_page");
    Route::get("/my-cart", "my_cart")->name("pages.my_cart");
    Route::get("/my-wishlist", "my_wishlist")->name("pages.my_wishlist");
    Route::get("/checkout", "checkout_page")->name("pages.checkout-page");
    Route::get("/signup-login", "signup_login_page")->name("pages.signup_login_page");
    Route::get("/contact-us", "contact_us_page")->name("pages.contact_us");
});
// Route for handle user request 
Route::prefix("/user")->controller(UserController::class)->group(function(){
    Route::post("/store", "store")->name("user.store");
});

//====================== Logic to create some following routes for handle backends logic
Route::prefix("/admin")->controller(AdminController::class)->group(function(){
    Route::get("/", "dashbord");
    Route::get("/dashbord", "dashbord")->name("admin.dashbord");
});