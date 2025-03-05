<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdminLoginMiddleware;
use App\Http\Middleware\IsUserGuestMiddleware;
use App\Http\Middleware\IsUserLoginMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ======================= Route for perform logout operations
Route::get("/logout", function(){
    Auth::logout();
    session()->flush();
    return redirect()->route("home");
})->name("logout");

//====================== Logic to create some following routes for handle frontend logic
Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/terms", [HomeController::class, "terms"])->name("terms");
Route::get("/privacypolicy", [HomeController::class, "privacypolicy"])->name("privacypolicy");
Route::get("/sellerpolicy", [HomeController::class, "sellerpolicy"])->name("sellerpolicy");
Route::get("/sellerpolicy", [HomeController::class, "sellerpolicy"])->name("sellerpolicy");
Route::get("/returnpolicy", [HomeController::class, "returnpolicy"])->name("returnpolicy");
Route::get("/supportpolicy", [HomeController::class, "supportpolicy"])->name("supportpolicy");
Route::get("/shipping-policy", [HomeController::class, "shippingpolicy"])->name("shipping-policy");

// Route for handle frontend pages
Route::prefix("/pages")->controller(PagesController::class)->group(function(){
    Route::get("/product-filter/{search?}/{price_filter?}", "product_filter_page")->name("pages.product_filter_page");
    Route::get("/product-filter/apply/", "product_filter_apply")->name("pages.product_filter_apply");
    Route::get("/product-details/search={slug}", "product_details_page")->name("pages.product_details_page");
    Route::get("/view-profile/{id}", "view_profile")->name("pages.view-profile")->middleware(IsUserLoginMiddleware::class);
    Route::get("/my-cart", "my_cart")->name("pages.my_cart")->middleware(IsUserLoginMiddleware::class);
    Route::get("/my-wishlist", "my_wishlist")->name("pages.my_wishlist")->middleware(IsUserLoginMiddleware::class);
    Route::get("/my-orders", "my_orders")->name("pages.my-orders")->middleware(IsUserLoginMiddleware::class);
    Route::get("/checkout", "checkout_page")->name("pages.checkout-page");
    Route::get("/signup-login", "signup_login_page")->name("pages.signup_login_page")->middleware(IsUserGuestMiddleware::class);
    Route::get("/contact-us", "contact_us_page")->name("pages.contact_us");
    Route::get("/otp-verify", "otp_verify_page")->name("pages.otp_verify")->middleware(IsUserGuestMiddleware::class);

    Route::middleware(IsUserGuestMiddleware::class)->prefix("/reset-password")->group(function(){
        Route::get("email-verifycation", "email_verifycation_page")->name("pages.email-verifycation-page");
        Route::post("email-verifycation-request", "email_verifycation_request")->name("page.email_veryfication_request");
        Route::get("reset-password-page/{email}", "reset_password_page")->name("pages.reset_password_page");
        Route::post("reset-password-request", "reset_password_request")->name("pages.reset_password_request");
    });
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

// Route for handle product action like: wishlist, my cart, my orders and more
Route::prefix("/product")->controller(ProductController::class)->group(function(){
    Route::prefix("/my-wishlist")->group(function(){
        Route::post("/store","myWishlist_store")->name("product.my_wishlist.store");
        Route::post("/destroy", "myWishlist_destroy")->name("product.myWishlist.destroy");
    });

    Route::prefix("/my-cart")->group(function(){
        Route::post("/store", "my_cart_store")->name("product.my_cart.store");
        Route::get("/destroy/{id}", "my_cart_destroy")->name("product.my_cart.destroy");
    });

    Route::prefix("/orders")->group(function(){
       Route::post("/order-request", "order_request")->name("product.orders.order_request");
       Route::post("payment-callback", "payment_callback")->name("product.orders.payment_callback");
       Route::get("/cancle-my-orders/{orderid}", "orders_cancle_my_order")->name("product.orders.cancle_my_orders");
       Route::post("/delete/cancle-my-order", "delete_cancle_my_order")->name("product.orders.delete_cancle_my_order");
    });
    
});

//====================== Logic to create some following routes for handle backends logic
Route::middleware(IsAdminLoginMiddleware::class)->prefix("/admin")->controller(AdminController::class)->group(function(){
    Route::get("/", "dashbord");
    Route::get("/dashbord", "dashbord")->name("admin.dashbord");

    Route::get("/product-discreption-grnerator", function(){
        return view("admin.prouct_discreption_generator");
    })->name("admin.product-dicreption-generator");


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
        Route::get("/edit/{id}", "product_edit")->name("admin.product.edit");
        Route::put("/update", "product_update")->name("admin.product.update");
        Route::delete("/delete/{id}", "product_destroy")->name("admin.product.delete");
    });

    Route::prefix("/orders")->group(function(){
        Route::get("/index", "orders_index")->name("admin.orders.index");
        Route::post("/update", "orders_status_update")->name("admin.orders-status.update");
        Route::get("/search/{id}", "order_search")->name("admin.orders.search");
        Route::post("/search-by-order-id", "order_search_by_order_id")->name("admin.orders.order_search_by_order_id");
        Route::get("orders/destroy/{id}", "orders_destroy")->name("admin.orders.destroy");
    });

    Route::prefix("/users")->group(function(){
        Route::get("/index", "users_index")->name("admin.users.index");
        Route::Post("/update", "users_update")->name("admin.users.update");
        Route::get("/search/{id}", "user_search")->name("admin.user.search");
        Route::get("/destroy/{id}", "user_destroy")->name("admin.user.destroy");
    });

});