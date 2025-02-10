<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Categories;
use App\Models\MyWishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*
         * Logic to share globaly data
        */
        // Get the categories data
        $categories_data = Categories::get(["id", "name", "slug", "category_img"]);
        // Get the brand data
        $brands_data = Brand::get(["id", "name", "slug", "brand_img"]);
        // Get the prium serise laptop
        $prium_series_laptops = Product::where("category_name", "like", "%laptop%")->where("selling_price", ">", "15000")->limit(5)->get(["id", "name", "slug", "product_status", "selling_price", "brand_name", "thumbnail_img"]);
        // Get the laptop for business purpus
        $for_business_purpus = Product::where("category_name", "like", "%laptop%")->where("selling_price", ">=", "15000")->inRandomOrder()->limit(5)->get(["id", "name", "slug", "product_status", "selling_price", "brand_name", "thumbnail_img"]);
        // Get the laptop for study purpus and small work
        $for_studey_purpus_office_work = Product::where("category_name", "like", "%laptop%")->where("selling_price", "<", "15000")->inRandomOrder()->limit(5)->get(["id", "name", "slug", "product_status", "selling_price", "brand_name", "thumbnail_img"]);
        View::share(compact("categories_data", "brands_data", "prium_series_laptops", "for_business_purpus", "for_studey_purpus_office_work"));

        /*
        * Logic to share favorite products only when user is logged in
        */
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $my_favorites_product_data = MyWishlist::where("user_id", Auth::id())->get();
                $view->with("my_favorites_product_data", $my_favorites_product_data);
            }
        });
        
    }
}
