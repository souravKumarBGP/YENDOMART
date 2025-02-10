<?php

namespace App\Http\Controllers;

use App\Models\MyWishlist;
use App\Models\Product;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    // Logic to create a methods to handle a ajax request for store new wishlist product
    public function myWishlist_store(Request $request){

        // return $request;
        
        try{

            // Logic to check user is login or not
            if(Auth::guest()){
                return json_encode(["status"=> "user_not_login"]);
            }

            // Logic to get the data
            $product_id = base64_decode($request->product_id);

            // Logic to check product is already exist or not
            $is_product_exist = MyWishlist::where("product_id", $product_id)->where("user_id", Auth::id())->get();

            if(count($is_product_exist) == 0){
                
                // Logic to store product id into database
                $result = MyWishlist::create([
                    "product_id"=> $product_id,
                    "user_id"=> Auth::id()
                ]);

                if($result){
                    return json_encode(["status"=> "success"]);
                }else{
                    return json_encode(["status"=> "error"]);
                }

            }else{

                return json_encode(["status"=> "product_exist"]);
            }


        }catch(\Exception $e){

            // Log::alert("Unable to add favroutes product");
            return json_encode(["status"=> $e->getMessage()]);
            return json_encode(["status"=> "error"]);

        }

    }

    // Logic to create a methods to handle a ajax request for delete my wishlist product
    public function myWishlist_destroy(Request $request){
        // return $request;

        try{
            // Get the product id
            $product_id = base64_decode($request->del_id);

            // Logic to check product is exist or not 
            $is_product_exist = MyWishlist::where("product_id", $product_id)->get("id");

            if(count($is_product_exist) > 0){

                $result = MyWishlist::where("product_id", $product_id)->delete();
                
                if($result){
                    return json_encode(["status"=> "success"]);
                }else{
                    return json_encode(["status"=> "error"]);
                }
                
            }else{
                
                return json_encode(["status"=> "product_not_exist"]);
            }

        }catch(\Exception $e){
            Log::alert("Unable to destroy wishlist product");
            return json_encode(["status"=> $e->getMessage()]);
        }
        
        
        
    }
}
