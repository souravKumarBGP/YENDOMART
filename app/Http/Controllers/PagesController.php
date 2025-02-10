<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\MyWishlist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class PagesController extends Controller
{
    // Logic to make a method to show product filter page
    public function product_filter_page(Request $request, string $search_value = "laptop"){
        
        // Logic to get the serch value
        $search_value = Str::slug(addslashes(strip_tags($request->search)));
        // Logic to check seach value is empty then set default value
        if(empty($search_value)){
            $search_value = "laptop";
        }
        // Make request to search releted data
        $search_data = Product::whereany(["brand_name", "category_name", "slug"], "like", "%$search_value%")->select(["id", "name", "slug", "product_status", "selling_price", "brand_name", "thumbnail_img"])->paginate(12);
        // Return the view file with search data
        return view("pages.product_filter", compact("search_data"));
    }

    // Logic to make a method to show product details page
    public function product_details_page(string $slug){
        
        // Logic to get the slug 
        $slug = strip_tags($slug);
        // Logic to get product releted the slug 
        $product_data = Product::where("slug", "like", "%$slug%")->first();
        if($product_data){
            
            // Logic to search brand image
            $brands_img = Brand::where("name", "like", "%$product_data->brand_name%")->first("brand_img");
            // Logic to search similar products
            $similar_products_data = Product::where("brand_name", "like", "%$product_data->brand_name%")->limit(20)->inRandomOrder()->get(["id", "name", "slug", "product_status", "selling_price", "brand_name", "thumbnail_img"]);

            return view("pages.product_details", compact("product_data", "brands_img", "similar_products_data"));
        }else{
            return abort("404");
        }
        
    }

    // Logic to make a methods to show view profile page
    public function view_profile(string $id){

        // Logic to perform autherization operations
        $id = base64_decode($id);
        if(Auth::id() == $id){
            return view("pages.view_profile");
        }else{
            return abort(404);
        }
        
    }

    // Logic to create a methods to show my cart page
    public function my_cart(){
        return view("pages.my-cart");
    }

    // Logic to create a methods to show my cart page
    public function my_wishlist(){

        // Logic to get the product id
        $my_favorites_product_data = MyWishlist::where("user_id", Auth::id())->get("product_id");
        $product_id_arr = [];
        foreach($my_favorites_product_data as $val){
            array_push($product_id_arr, intval($val["product_id"]));
        }

        // Logic to find the products data
        $data = Product::whereIn("id", $product_id_arr)->select(["id", "thumbnail_img", "name", "selling_price", "slug"])->paginate(5);

        return view("pages.my-wishlist", compact("data"));
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
