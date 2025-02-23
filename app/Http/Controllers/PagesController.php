<?php

namespace App\Http\Controllers;

use App\Mail\Reset_password_link;
use App\Models\User;
use App\Models\Brand;
use App\Models\MyCart;
use App\Models\Product;
use App\Models\MyWishlist;
use App\Models\Orders;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;

use function PHPUnit\Framework\isEmpty;

class PagesController extends Controller
{
    // Logic to make a method to show product filter page
    public function product_filter_page(Request $request, string $search_value = "laptop", string $price_filter = "lth"){
        
        // Logic to get the serch value
        $search_value = Str::slug(addslashes(strip_tags($request->search)));
        
        // Logic to check seach value is empty then set default value
        if(empty($search_value)){
            $search_value = "laptop";
        }
        if($price_filter == "lth"){
            // Make request to search releted data
            $search_data = Product::whereany(["brand_name", "category_name", "slug"], "like", "%$search_value%")->select(["id", "name", "slug", "product_status", "selling_price", "brand_name", "thumbnail_img"])->orderby("selling_price", "asc")->paginate(12);
        }else{
            // Make request to search releted data
            $search_data = Product::whereany(["brand_name", "category_name", "slug"], "like", "%$search_value%")->select(["id", "name", "slug", "product_status", "selling_price", "brand_name", "thumbnail_img"])->orderby("selling_price", "desc")->paginate(12);
        }
        
        // Return the view file with search data
        return view("pages.product_filter", compact("search_data", "search_value", "price_filter"));
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

        // Logic to get the product id
        $my_cart_data = MyCart::where("user_id", Auth::id())->get("product_id");
        $product_id_arr = [];
        foreach($my_cart_data as $val){
            array_push($product_id_arr, intval($val["product_id"]));
        }

        // Logic to find the products data
        $data = Product::whereIn("id", $product_id_arr)->select(["id", "thumbnail_img", "name", "selling_price", "slug"])->paginate(5);

        $sub_total = Product::whereIn("id", $product_id_arr)->sum("selling_price");

        return view("pages.my-cart", compact("data", "sub_total"));
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

    // Logic to create a methods for show my order page
    public function my_orders(){

        // Logic to get my order data list
        $user_id = Auth::id();
        $my_order_list = Orders::where("user_id", $user_id)->where("payment_status", "success")->get();
        
        return view("pages.my-orders", compact("my_order_list"));
    }

    // Logic to create a methods to show my cart page
    public function checkout_page(){

        // Logic to get the product id
        $my_cart_data = MyCart::where("user_id", Auth::id())->get("product_id");
        $product_id_arr = [];
        foreach($my_cart_data as $val){
            array_push($product_id_arr, intval($val["product_id"]));
        }

        // Logic to find the products data
        $cart_data = Product::whereIn("id", $product_id_arr)->select(["id", "thumbnail_img", "name", "selling_price", "slug"])->paginate(5);

        $sub_total = Product::whereIn("id", $product_id_arr)->sum("selling_price");
        
        // Logic to check any product in cart exist or not
        if(count($cart_data) > 0){
            return view("pages.checkout", compact("cart_data", "sub_total"));
        }else{
            return redirect()->route("pages.my_cart");
        }
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

    // Logic to create a methods to show email verifycation page for reset password
    public function email_verifycation_page(){
        return view("pages.reset_password.email-verification");
    }

    // Logic to create a methods to handle email verifycation request
    public function email_verifycation_request(Request $request){
        
        // Logic to apply server side validation
        $request->validate([
            "email"=> "required|max:100|email|exists:users,email"
        ], [
            "email.required"=> "Email id is required. Please enter your email id !",
            "email.max"=> "Email id must be lass then 100 charectors !",
            "email.exists"=> "This email is not registred. Please enter a registred email id !"
        ]);

        // Get the data
        $data = User::where("email", $request->email)->first(["full_name", "email"]);

        $resust = Mail::to($request->email)->send(new Reset_password_link($data->full_name, $data->email));

        if($resust){
            return redirect()->back()->with("success_msg", "A reset password link send to your email id: (". $request->email. ") Please Check your email and reset your password.");
        }else{
            return redirect()->back()->with("error_msg", "Unable to reset your password. Please try again latter !");
        }

    }

    // Logic to create a methods to show reset password page
    public function reset_password_page(string $email){
        return view("pages.reset_password.reset_password", compact("email"));
    }

    // Logic to create a methods to reset password request
    public function reset_password_request(Request $request){

        try{

            // Logic to check email is exist or not
            $email = strip_tags(base64_decode($request->email));
            $is_email_exist = User::where("email", $email)->get("id");
        
            if(count($is_email_exist) != 1){
                return redirect()->back()->with("error_msg", "Email is not exist. Please try again latter !");
            }
            
            // Logic to apply server side validation
            $request->validate([
                "new_pass"=> "required|max:100",
                "conf_pass"=> "required|same:new_pass"
            ], [
                "new_pass.required"=> "New password is required. Please enter the new password !",
                "new_pass.max"=> "New password must be lass then 100 charectors !",
                "conf_pass.required"=> "Confirm password is required. Please enter same password !",
                "conf_pass"=> "New password and Confirm password must be same !"
            ]);
    
            // Logic to perform reset password operation
            $result = User::where("email", $email)->update([
                "password"=> strip_tags(bcrypt($request->new_pass))
            ]);
    
            if($result){
                return redirect()->route("pages.signup_login_page")->with("success_msg", "Password reset successfully. Plese login now.");
            }else{
                return redirect()->back()->with("error_msg", "Unable to reset password. Please try again latter !");   
            }
        }catch(\Exception $e){
            return redirect()->back()->with("error_msg", "Something went wrong. Please try again latter ! ". $e->getMessage());   
        }
        
    }
}
