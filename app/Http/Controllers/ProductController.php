<?php

namespace App\Http\Controllers;

use App\Models\MyCart;
use App\Models\MyWishlist;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Razorpay\Api\Order;

class ProductController extends Controller
{
    // Logic to create a methods to handle a ajax request for store new wishlist product
    public function myWishlist_store(Request $request){

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

    // Logic to create a methods to handle ajax request for store product into my cart
    public function my_cart_store(Request $request){

        try{

            // Logic to check user is login or not
            if(Auth::guest()){
                return json_encode(["status"=> "user_not_login"]);
            }

            // Logic to get the data
            $product_id = base64_decode($request->product_id);

            // Logic to check product is already exist or not
            $is_product_exist = MyCart::where("product_id", $product_id)->where("user_id", Auth::id())->get();

            if(count($is_product_exist) == 0){
                
                // Logic to store product id into database
                $result = MyCart::create([
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
            // return json_encode(["status"=> "error"]);

        }
    }

    // Logic to creae a methods to handle ajax request for delete my cart list product
    public function my_cart_destroy(string $id){

        try{
            // Get the product id
            $product_id = base64_decode($id);

            // Logic to check product is exist or not 
            $is_product_exist = MyCart::where("product_id", $product_id)->get("id");

            if(count($is_product_exist) > 0){

                $result = MyCart::where("product_id", $product_id)->delete();
                
                if($result){
                    return redirect()->back()->with("success_msg", "Cart product deleted successfully.");
                }else{

                    return redirect()->back()->with("error_msg", "Unable to delete Cart product. Please try again latter.");
                }
                
            }else{
                
                return redirect()->back()->with("error_msg", "Cart product is not exists.");
            }

        }catch(\Exception $e){
            Log::alert("Unable to destroy wishlist product");
            return redirect()->back()->with("error_msg", "Something went wrong please try again latter.");
        }
        
    }

    // Logic to create a methods to cancle my order
    public function orders_cancle_my_order(string $orderid){
        try{
            $order_id = base64_decode($orderid);
            $result = Orders::where("order_id", $order_id)->update([
                "is_order_cancle"=> "yes"
            ]);

            if($result){
                return redirect()->back()->with("success_msg", "Order Cancel Successfully");
            }else{
                return redirect()->back()->with("error_msg", "Unable to cancle order. Please try again latter !");
            }
        }catch(\Exception $e){
            return redirect()->back()->with("error_msg", "Unable to cancle order. Please try again latter !");
            // return redirect()->back()->with("error_msg", "Unable to cancle order. ".$e->getMessage());
        }
    }

    // Logic to create a methods to handle ajax request for destroy cancle order
    public function delete_cancle_my_order(Request $request){
        
        try{
            // Get the id and decode it
            $id = base64_decode($request->id);
            // Logic to apply validation
            if(!$id){
                return json_encode(["status"=> "error"]);
            }
            // Logic to get the order data
            $result = Orders::findorfail($id)->delete();
            if($result){
                return json_encode(["status"=> "success"]);
            }else{
                return json_encode(["status"=> "error"]);
            }
            
        }catch(\Exception $e){
            return json_encode(["status"=> $e->getMessage()]);
        }
    }

    // Logic to create a methods to handle ajax request for processing user orders
    public function order_request(Request $request){

        try{

            // Logic to get the product id
            $my_cart_data = MyCart::where("user_id", Auth::id())->get("product_id");
            $product_id_arr = [];
            foreach($my_cart_data as $val){
                array_push($product_id_arr, intval($val["product_id"]));
            }
            
            $sub_total = Product::whereIn("id", $product_id_arr)->sum("selling_price");
            // Get the data
            $user_id = Auth::id();
            $total_amount = $sub_total;
            $payment_methods = $request->payment_methods;

            // Logic to check payment methods is cod or online
            if($request->payment_methods == "cod"){

                $current_payment = 999;

                // Logic to generate order id
                $api = new  Api(env("RZP_KEY_ID"), env("RZP_SECRET_KEY"));
                $order_id = $api->order->create([
                    "receipt" => "receipt_".uniqid(),
                    "amount"=> $current_payment * 100,
                    "currency"=> "INR"
                ]);

                // Logic to store data into database
                foreach($product_id_arr as $id){

                    $price = Product::where("id", $id)->get(["selling_price", "name", "thumbnail_img"]);

                    // return $price;

                    $payable_amount = $price[0]->selling_price - $current_payment;

                    $result = Orders::create([
                        "user_id"=> $user_id,
                        "product_id"=> $id,
                        "product_name"=> $price[0]->name,
                        "thumbnail_img"=> $price[0]->thumbnail_img,
                        "current_payment"=> $current_payment,
                        "payable_amount"=> $payable_amount,
                        "total_amount"=> $price[0]->selling_price,
                        "order_id"=> $order_id["id"],
                        "payment_status"=> "panding",
                        "payment_methods"=> $payment_methods,
                        "updated_at"=> now(),
                        "created_at"=> now()
                    ]);
                }

            }else{
                
                $current_payment = $sub_total;
                $payable_amount = 0; 

                // Logic to generate order id
                $api = new  Api(env("RZP_KEY_ID"), env("RZP_SECRET_KEY"));
                $order_id = $api->order->create([
                    "receipt" => "receipt_".uniqid(),
                    "amount"=> $current_payment * 100,
                    "currency"=> "INR"
                ]);

                // Logic to store data into database
                foreach($product_id_arr as $id){

                    $price = Product::where("id", $id)->get(["selling_price", "name", "thumbnail_img"]);

                    $result = Orders::create([
                        "user_id"=> $user_id,
                        "product_id"=> $id,
                        "product_name"=> $price[0]->name,
                        "thumbnail_img"=> $price[0]->thumbnail_img,
                        "current_payment"=> $price[0]->selling_price,
                        "payable_amount"=> $payable_amount,
                        "total_amount"=> $price[0]->selling_price,
                        "order_id"=> $order_id["id"],
                        "payment_status"=> "panding",
                        "payment_methods"=> $payment_methods,
                        "updated_at"=> now(),
                        "created_at"=> now()
                    ]);
                }

                
            }
            
            if($result){
                return response()->json([
                    "order_id"=> $order_id["id"],
                    "RZP_KEY_ID"=> env("RZP_KEY_ID"),
                    "RZP_SECRET_KEY"=> env("RZP_SECRET_KEY"),
                    "current_payment"=> $current_payment,
                    "usr_name"=> Auth::user()->full_name,
                    "usr_email"=> Auth::user()->email,
                    "usr_phone"=> Auth::user()->phone
                ]);
                
            }else{
                return json_encode(["status"=> "error"]);
            }

        }catch(\Exception $e){

            return json_encode(["status"=> $e->getMessage()]);
        }

    }

    // Logic to create a methods to handle ajax request for payment callback
    public function payment_callback(Request $request){

        try{

            // Get the data
            $razorpay_payment_id = $request->razorpay_payment_id;
            $razorpay_order_id = $request->razorpay_order_id;
    
            // Update the order table
            $result = Orders::where("order_id", $razorpay_order_id)->update([
                "payment_id"=> $razorpay_payment_id,
                "payment_status"=> "success"
            ]);
    
            if($result){
                
                // Logic to decrese the product quentity after payment successfull
                $product_id = Orders::where("order_id", $razorpay_order_id)->get("product_id");
                foreach($product_id as $item){

                    $current_quantity = Product::where("id", $item->product_id)->get("available_quentity");
                    $current_quantity = $current_quantity[0]->available_quentity;

                    // Logic to update quantity
                    Product::findorfail($item->product_id)->update([
                        "available_quentity"=> $current_quantity -1
                    ]);
                }
                // Logic to destroy my cart list product
                MyCart::where("user_id", Auth::id())->delete();
                
                return json_encode(["status"=> "success"]);
            }else{

                $result = Orders::findorfail("order_id", $razorpay_order_id)->first()->update([
                    "order_id"=> $razorpay_order_id,
                    "payment_status"=> "failed"
                ]);
                
                return json_encode(["status"=> "error"]);
            }
        }catch(\Exception $e){

            return json_encode(["status"=> $e->getMessage()]);
        }
        
        
    }
}
