<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;
use Psy\CodeCleaner\ReturnTypePass;
use Psy\Command\WhereamiCommand;
use Razorpay\Api\Order;

class AdminController extends Controller
{
    // Logic to create a methods to show admin dashbord page
    public function dashbord(){

        // Get the order records
        $today_orders = Orders::where("created_at", "like", "%".date("Y-m-d")."%")->paginate(35);
        // Get the users records
        $users_data = User::where("role", "customer")->paginate(30);
        // Get the panding order
        $panding_order = Orders::where("payment_status", "like", "%panding%")->get("id");
        // Get the canciled order
        $canciled_order = Orders::where("payment_status", "like", "%canciled%")->get("id");
        // total product
        $products_data = Product::get("id");
        // For total unites
        $unites_data = Unit::get("id");
        
        return view("admin.dashbord", compact("today_orders", "users_data", "panding_order", "canciled_order", "products_data", "unites_data"));
    }

    // Logic to create a methods to show unites page
    public function units_index(){
        $data = Unit::get();
        session()->regenerate();
        return view("admin.units.units", compact("data"));
    }

    // Logic to create a methods to store new unite
    public function units_store(Request $request){
        
        // Validate input data with server-side validation
        $credentials = $request->validate([
            "name" => "required|max:20|unique:units,name",
        ], [
            "name.required" => "The unit name is required.",
            "name.max" => "The unit name must not exceed 20 characters.",
            "name.unique" => "This unit has already been created!",
        ]);

        // Store unit into database
        $result = Unit::create($credentials);

        // Redirect back with success or error message
        if ($result) {
            session()->regenerate();
            return redirect()->back()->with("success_msg", "Unit created successfully.");
        } else {
            return redirect()->back()->withErrors(["error_msg"=>"Unable to create unit. Please try again later!"]);
        }
    }

    // Logic to create a methods to destroy unite
    public function units_destroy(string $id){
        $id = base64_decode(strip_tags($id));

        // Logic to perform delete operation
        $result = Unit::findorFail($id)->delete();
        if($result){
            session()->regenerate();
            return redirect()->back()->with("success_msg", "Unites deleted successfully.");
        }else{
            return redirect()->back()->with("error_msg", "Unable to delete unite. Please try again latter !");
        }
    }

    // Logic to create a methods to show categories page
    public function categories_index(){
        $data = Categories::get();
        session()->regenerate();
        return view("admin.categories.categories", compact("data"));
    }

    // Logic to careate a methods to stored new categories
    public function category_store(Request $request){
        
        // Logic to apply server side validation
        $data = $request->validate([
            "name" => "required|unique:categories,name|max:255",
            "category_img" => "required|mimes:jpg,jpeg,png,webp,svg|max: 1024"
        ], [
            "name.required" => "Category name is required. Please enter a category name.",
            "name.unique" => "This category already exists. Please choose a different name.",
            "name.max" => "Category name must be less than 255 characters.",
            "category_img.required" => "Category image field is required. Please upload a category image.",
            "category_img.mimes" => "Invalid image format. Please upload a JPG, JPEG, PNG, WebP, or SVG image.",
            "category_img.max"=> "Invalid image size. Please upload a image less then 1MB."
        ]);

        // Logic to store image file
        $path = $request->file("category_img")->store("image/category_img", "public");

        $slug = Str::slug($request->name);
        
        $result = Categories::create([
            "name"=> $request->name,
            "slug"=> $slug,
            "category_img"=> $path
        ]);

        if($result){
            session()->regenerate();
            return redirect()->back()->with("success_msg", "Category created successfully.");
        }else{
            return redirect()->back()->with("error_msg", "Unable to create category. Please try again letter.");
        }
    }

    // Logic to create a methods to destroy target category
    public function category_destroy(string $id){
        $del_id = base64_decode(strip_tags($id));

        // Remove category image form server
        $cate_img_path = (Categories::select("category_img")->findorfail($del_id))->category_img;

        unlink(public_path("storage/".$cate_img_path));
        
        $result = Categories::findorfail($del_id)->delete();
        
        if($result){
            session()->regenerate();
            return redirect()->back()->with("success_msg", "Category deleted successfully.");
        }else{
            return redirect()->back()->with("error_msg", "Category deleted successfully");
        }
    }

    // Logic to create a methods to show brands page
    public function brands_index(){

        // Get category name
        $category_name = Categories::get("name");
        $brand_data = Brand::get();
        // return $brand_data;
        session()->regenerate();
        return view("admin.brands.brands", compact("category_name", "brand_data"));
    }

    // Logic to create a methods to store new brand
    public function brand_store(Request $request){

        // Logic to make sever side validation
        $request->validate([
            "name"=> "required|max:255|unique:brands,name",
            "category_name"=> "required|exists:categories,name",
            "brand_img"=> "required|mimes:png,jpg,jpeg,svg,webp|max:1024"
        ],[
            "name.required"=> "Brand name is required. Please enter brand name.",
            "name.max"=> "Brand name must be less then 255 characters.",
            "name.unique"=> "This brand name is already exists. Please enter different name.",
            "catetory_name.required"=> "Category name is required. Please enter category name.",
            "catetory_name.max"=> "Category name must be less then 255 characters.",
            "catetory_name.exists"=> "invalid category name. Please select currect category name.",
            "brand_img.mimes"=> "Invalid image format. Please upload a JPG, JPEG, PNG, WebP, or SVG image.",
            "brand_img.max"=> "File size must be less then 1MB."
        ]);


        $path = $request->file("brand_img")->store("/image/brands_img", "public");
        $slug = Str::slug($request->name);

        // Logic to uplode data into database
        $result = Brand::create([
            "name"=> $request->name,
            "category_name"=> $request->category_name,
            "slug" => $slug,
            "brand_img"=> $path
        ]);

        if($result){
            session()->regenerate();
            return redirect()->back()->with("success_msg", "Category created successfully.");
        }else{
            return redirect()->back()->with("error_msg", "Unable to create category. Please try again letter.");
        }

    }

    // Logic to create a methods to destroy target category
    public function brand_destroy(string $id){
        $del_id = base64_decode(strip_tags($id));

        // Remove category image form server
        $brand_img_path = (Brand::select("brand_img")->findorfail($del_id))->brand_img;

        unlink(public_path("storage/".$brand_img_path));
        
        $result = Brand::findorfail($del_id)->delete();
        
        if($result){
            session()->regenerate();
            return redirect()->back()->with("success_msg", "Brand deleted successfully.");
        }else{
            return redirect()->back()->with("error_msg", "Brand deleted successfully");
        }
    }

    // Logic to create a methods to show product page
    public function products_index(){

        try{
        
            // Fetch the product details
            $product_data = Product::paginate(5);
            return view("admin.products.index", compact("product_data"));
        } catch(\Exception $e){
            Log::error("Unable to fetch product list.". $e->getMessage());
            return redirect()->back()->with("error_msg", "Unable to fetch product list. Please try again latter.");
        }
    }

    // Logic to create a methods to show create new product page
    public function product_create(){

        // Get the following data
        $unit_data = Unit::get("name");
        $category_data = Categories::get("name");
        $brand_data = Brand::get("name");
        
        return view("admin.products.create", compact("unit_data", "category_data", "brand_data"));
    }

    // Logic to create a methods to handle ajax request for stored new products
    public function product_store(Request $request){
        
        try{
            
            // Logic to apply server side validation
            $request->validate([
                "name"   => "required|max:255",
                "selling_price"  => "required|numeric|min:1|max:500000",
                "discount_price" => "required|numeric|min:0|max:500000",
                "live_link"      => "required|string|max:500",
                "total_quentity"       => "required|integer|min:1|max:500000",
                "unit"           => "required|string|max:15|exists:units,name",
                "category_name"  => "required|string|max:255|exists:categories,name",
                "brand_name"     => "required|string|max:255|exists:brands,name",
                "product_status" => "required|string|max:255",
                "thumbnail_img"  => "required|mimes:jpg,png,jpeg,svg,webp|max:10240",
                "gallary_img"    => "required|array|size:5",
                "gallary_img.*"  => "mimes:jpg,png,jpeg,svg,webp|max:10240",
                "product_discreption"=> "required",
            ]);
            
            // Logic store thumbnail image 
            $thumb_path = $request->file("thumbnail_img")->store("/image/products_img/thumbnail_img", "public");
            
            // Logic store gallary image 
            $gallary_img_arr = [];
            $iteration = 1;
            foreach($request->file("gallary_img") as $key=> $item){
                $gallary_img_arr["img".$iteration] = $item->store("/image/products_img/gallary_img", "public");
                $iteration = $iteration+1;
            }

            // Generate the slug
            $slug = Str::slug($request->name);
            // Generate sku
            $sku = substr($slug, 0, 5)."_".rand(111, 999);

            // Logic to store data into database
            $result = Product::create([
                "name"            => $request->name,
                "slug"            => $slug,
                "selling_price"   => $request->selling_price,
                "discount_price"  => $request->discount_price,
                "live_link"       => $request->live_link,
                "total_quentity"  => $request->total_quentity,
                "available_quentity" => $request->total_quentity,
                "unit"            => $request->unit,
                "category_name"   => $request->category_name,
                "brand_name"      => $request->brand_name,
                "product_status"  => $request->product_status,
                "thumbnail_img"   => $thumb_path,
                "gallary_img"     => json_encode($gallary_img_arr),
                "sku"             => $sku, 
                "product_discreption"=> json_encode($request->product_discreption)
            ]);

            if($result){
                return json_encode(["status"=> "success"]);
            }

        } catch(\Exception $e){

            Log::error("Unable to create product". $e->getMessage());
            // return json_encode(["status"=> $e->getMessage()]); // Only for developer view this error 
            return json_encode(["status"=> "error"]);
        }
                
    }

    // Logic to create a methods to show product edit page
    public function product_edit(string $id){

        try{
            
            $id = base64_decode($id);

            // Get the following data
            $unit_data = Unit::get("name");
            $category_data = Categories::get("name");
            $brand_data = Brand::get("name");
            $product_data = Product::select(["id", "name", "slug", "selling_price", "discount_price", "total_quentity", "available_quentity", "live_link", "unit", "category_name", "brand_name", "product_status", "sku", "top_selling_position", "product_discreption"])->findorfail($id);
            // return $product_data;
            
            return view("admin.products.edit", compact("product_data", "category_data", "brand_data", "unit_data"));

        } catch(\Exception $e){

            Log::error("Unable to fetch data.". $e->getMessage());
            return redirect()->back()->with("error_msg", "Unable to fetch data. Please try again letter");
        }
        
    }

    // Logic create a methods to updae targeted product
    public function product_update(Request $request){

        try{

            // Logic to apply server side validation
            $request->validate([
                "name"   => "required|max:255",
                "selling_price"  => "required|numeric|min:1|max:500000",
                "discount_price" => "required|numeric|min:0|max:500000",
                "live_link"      => "required|string|max:500",
                "total_quentity" => "required|integer|min:1|max:500000",
                "unit"           => "required|string|max:15|exists:units,name",
                "category_name"  => "required|string|max:255|exists:categories,name",
                "brand_name"     => "required|string|max:255|exists:brands,name",
                "product_status" => "required|string|max:255",
                "top_selling_position"=> "required|numeric|max:500",
                "thumbnail_img"  => "required|mimes:jpg,png,jpeg,svg,webp|max:10240",
                "gallary_img"    => "required|array|size:5",
                "gallary_img.*"  => "mimes:jpg,png,jpeg,svg,webp|max:10240",
                "product_discreption"=> "required",
            ]);

            // Logic to get edit id
            $edit_id = base64_decode($request->edit_id);
            
            // Logic to unlink the file
            $img_path = Product::where("id", $edit_id)->get(["thumbnail_img", "gallary_img"]);

            if(count($img_path)){
                // Remove the thumbnail image
                $thumb_path = $img_path[0]->thumbnail_img;
                unlink(public_path("storage/".$thumb_path));

                // Remove the gallary image
                $gallary_imgs = $img_path[0]->gallary_img;
                foreach($gallary_imgs as $item){
                    unlink(public_path("storage/".$item));
                }
            }


            // Logic store thumbnail image 
            $thumb_path = $request->file("thumbnail_img")->store("/image/products_img/thumbnail_img", "public");
            
            // Logic store gallary image 
            $gallary_img_arr = [];
            $iteration = 1;
            foreach($request->file("gallary_img") as $key=> $item){
                $gallary_img_arr["img".$iteration] = $item->store("/image/products_img/gallary_img", "public");
                $iteration = $iteration+1;
            }

            // Generate the slug
            $slug = Str::slug($request->name);
            // Generate sku
            $sku = substr($slug, 0, 5)."_".rand(111, 999);

            // Logic to store data into database
            $result = Product::findorfail($edit_id)->update([
                "name"            => $request->name,
                "slug"            => $slug,
                "selling_price"   => $request->selling_price,
                "discount_price"  => $request->discount_price,
                "live_link"       => $request->live_link,
                "total_quentity"  => $request->total_quentity,
                "available_quentity" => $request->total_quentity,
                "unit"            => $request->unit,
                "category_name"   => $request->category_name,
                "brand_name"      => $request->brand_name,
                "product_status"  => $request->product_status,
                "thumbnail_img"   => $thumb_path,
                "gallary_img"     => json_encode($gallary_img_arr),
                "sku"             => $sku, 
                "top_selling_position"=> $request->top_selling_position,
                "product_discreption"=> json_encode($request->product_discreption)
            ]);

            if($result){
                return json_encode(["status"=> "success"]);
            }
            
            
        } catch(\Exception $e){
            Log::error("Unable to update product.". $e->getMessage());
            return json_encode(["status"=> $e->getMessage()]);
        }
    }
    
    // Logic to create a methods to delete targeted product
    public function product_destroy(Request $request, string $id){

        // Logic to handle exception
        try {
        
            $id = base64_decode($id);

            // Logic to unlink the file
            $img_path = Product::where("id", $id)->get(["thumbnail_img", "gallary_img"]);

            if(count($img_path)){
                // Remove the thumbnail image
                $thumb_path = $img_path[0]->thumbnail_img;
                unlink(public_path("storage/".$thumb_path));

                // Remove the gallary image
                $gallary_imgs = $img_path[0]->gallary_img;
                foreach($gallary_imgs as $item){
                    unlink(public_path("storage/".$item));
                }
            }

            $result = Product::findorfail($id)->delete();
            if($result){
                session()->regenerate();
                return redirect()->back()->with("success_msg", "Product deleted successfully");
            }else{
                return redirect()->back()->with("error_msg", "Unable to delete product. Please try again letter.");
            }
        } catch (\Exception $e) {
            // Log error for debugging
            Log::error("Product deletion failed: " . $e->getMessage());
            return redirect()->back()->with("error_msg", "Unable to delete product. Please try again later.");
        }
    }

    // Logic to create a methods to show orders list page
    public function orders_index(){
        // Get the order records
        $orders_data = Orders::get();

        return view("admin.orders.orders", compact("orders_data"));
    }

    // Logic to create a methods to change order status
    public function orders_status_update(Request $request){
        
        try{

            // Get data
            $order_status_val = $request->order_status_val;
            $order_id = $request->order_id;

            // Logic to check order is exist or not
            $data = Orders::where("order_id", $order_id)->get("id");
            if(count($data) == 0){
                return json_encode(["status"=> "error"]);
            }

            $result = Orders::where("order_id", $order_id)->update([
                "order_status"=> $order_status_val
            ]);

            if($result){
                return json_encode(["status"=> "success"]);
            }else{
                return json_encode(["status"=> "error"]);
            }
            
        }catch(\Exception $e){
            return json_encode(["status"=> $e->getMessage()]);
        }
        


        
    }
    
    // Logic to create a methods to destroy user 
    public function orders_destroy(string $id){
        $id = base64_decode($id);

        Orders::findorfail($id)->delete();
        return redirect()->route("admin.dashbord");
    }

    // Logic to create a methods to show user list page
    public function users_index(){

        // Get the users records
        $users_data = User::where("role", "customer")->paginate(30);

        return view("admin.users.users", compact("users_data"));
    }
    
    // Logic to create a methods to change order status
    public function users_update(Request $request){
        
        try{

            // Get data
            $status_val = $request->status_val;
            $user_id = $request->user_id;

            // Logic to check order is exist or not
            $data = User::where("id", $user_id)->get("id");
            if(count($data) == 0){
                return json_encode(["status"=> "error"]);
            }

            $result = User::where("id", $user_id)->update([
                "status"=> $status_val
            ]);

            if($result){
                return json_encode(["status"=> "success"]);
            }else{
                return json_encode(["status"=> "error"]);
            }
            
        }catch(\Exception $e){
            return json_encode(["status"=> $e->getMessage()]);
        }
        


        
    }
    
    // Logic to create a methods to destroy user 
    public function user_destroy(string $id){
        $id = base64_decode($id);
        User::findorfail($id)->delete();
        return redirect()->route("admin.dashbord");
    }

}
