<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AdminController extends Controller
{
    // Logic to create a methods to show admin dashbord page
    public function dashbord(){
        return view("admin.dashbord");
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
        return view("admin.products.index");
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
        
        // Logic to apply server side validation
        $request->validate([
            "name"   => "required|max:255",
            "selling_price"  => "required|numeric|min:1|max:500000",
            "discount_price" => "required|numeric|min:0|max:500000",
            "live_link"      => "required|string|max:500",
            "quantity"       => "required|integer|min:1|max:500000",
            "unit"           => "required|string|max:15|exists:units,name",
            "category_name"  => "required|string|max:255|exists:categories,name",
            "brand_name"     => "required|string|max:255|exists:brands,name",
            "product_status" => "required|string|max:255",
            "thumbnail_img"  => "required|mimes:jpg,png,jpeg,svg,webp|max:2048",
            "gallary_img"    => "required|array|size:5",
            "gallary_img.*"  => "mimes:jpg,png,jpeg,svg,webp|max:2048",
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
            "total_quentity"  => $request->quantity,
            "available_quentity" => $request->quantity,
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
                
    }
}
