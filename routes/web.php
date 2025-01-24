<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home");

// Route for handle frontend pages
Route::prefix("/pages")->controller(PagesController::class)->group(function(){
    Route::get("/product-filter", "product_filter_page")->name("pages.product_filter_page");
    Route::get("/product-details", "product_details_page")->name("pages.product_details_page");
    ROute::get("/my-cart", "my_cart")->name("pages.my-cart");
    ROute::get("/my-wishlist", "my_wishlist")->name("pages.my-wishlist");
});