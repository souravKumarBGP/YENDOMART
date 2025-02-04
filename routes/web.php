<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsUserGuest;
use App\Http\Middleware\IsUserGuestMiddleware;
use App\Http\Middleware\IsUserLoginMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

// ======================= Route for perform logout operations
Route::get("/logout", function(){
    Auth::logout();
    session()->flush();
    return redirect()->route("home");
})->name("logout");

//====================== Logic to create some following routes for handle frontend logic
Route::get("/", [HomeController::class, "index"])->name("home");

// Route for handle frontend pages
Route::prefix("/pages")->controller(PagesController::class)->group(function(){
    Route::get("/product-filter", "product_filter_page")->name("pages.product_filter_page");
    Route::get("/product-details", "product_details_page")->name("pages.product_details_page");
    Route::get("/view-profile/{id}", "view_profile")->name("pages.view-profile")->middleware(IsUserLoginMiddleware::class);
    Route::get("/my-cart", "my_cart")->name("pages.my_cart");
    Route::get("/my-wishlist", "my_wishlist")->name("pages.my_wishlist");
    Route::get("/checkout", "checkout_page")->name("pages.checkout-page");
    Route::get("/signup-login", "signup_login_page")->name("pages.signup_login_page")->middleware(IsUserGuestMiddleware::class);
    Route::get("/contact-us", "contact_us_page")->name("pages.contact_us");
    Route::get("/otp-verify", "otp_verify_page")->name("pages.otp_verify")->middleware(IsUserGuestMiddleware::class);;
});
// Route for handle user request 
Route::middleware(IsUserGuestMiddleware::class)->prefix("/user")->controller(UserController::class)->group(function(){
    Route::post("/store", "store")->name("user.store");
    Route::post("/login-request", "login_request")->name("user.login_request");
    Route::post("/otp-verification-request", "otp_verification_request")->name("user.otp_verification_request");
    Route::post("/resend-otp-request", "resend_opt_request")->name("user.resend_opt_request");
    Route::post("/update-profile-info-request", "update_profile_info_request")->name("user.update_profile_info_request")->withoutMiddleware(IsUserGuestMiddleware::class)->middleware(IsUserLoginMiddleware::class);
    Route::post("/update-profile-image-request", "update_profile_image_request")->name("user.update_profile_image_request")->withoutMiddleware(IsUserGuestMiddleware::class)->middleware(IsUserLoginMiddleware::class);
    Route::post("/update-password-request", "update_password_request")->name("user.update_password_request")->withoutMiddleware(IsUserGuestMiddleware::class)->middleware(IsUserLoginMiddleware::class);
});

//====================== Logic to create some following routes for handle backends logic
Route::prefix("/admin")->controller(AdminController::class)->group(function(){
    Route::get("/", "dashbord");
    Route::get("/dashbord", "dashbord")->name("admin.dashbord");

    Route::prefix("/units")->group(function(){
        Route::get("/", "units_index");
        Route::get("/index", "units_index")->name("admin.units.index");
        Route::post("/store", "units_store")->name("admin.units.store");
        Route::get("/destroy/{id}", "units_destroy")->name("admin.units.destroy");
    });

    Route::prefix("/categories")->group(function(){
        Route::get("/index", "categories_index")->name("admin.categories.index");
        Route::post("/store", "category_store")->name("admin.category.store");
        Route::get("/destroy/{id}", "category_destroy")->name("admin.category.destroy");
    });

    Route::prefix("/brands")->group(function(){
        Route::get("/index", "brands_index")->name("admin.brands.index");
        Route::post("/store", "brand_store")->name("admin.brand.store");
        Route::get("/destroy/{id}", "brand_destroy")->name("admin.brand.destroy");
    });

    Route::prefix("/products")->group(function(){
        Route::get("/index", "products_index")->name("admin.products.index");
        Route::get("/create", "product_create")->name("admin.product.create");
        Route::post("/store", "product_store")->name("admin.product.store");
        
    });
});