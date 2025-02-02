<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Unite;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AdminController extends Controller
{
    // Logic to create a methods to show admin dashbord page
    public function dashbord(){
        return view("admin.dashbord");
    }

    // Logic to create a methods to show unites page
    public function unites_index(){
        $data = Unite::get();
        return view("admin.unites.unites", compact("data"));
    }

    // Logic to create a methods to store new unite
    public function unites_store(Request $request){
        
        // Validate input data with server-side validation
        $credentials = $request->validate([
            "name" => "required|max:20|unique:unites,name",
        ], [
            "name.required" => "The unit name is required.",
            "name.max" => "The unit name must not exceed 20 characters.",
            "name.unique" => "This unit has already been created!",
        ]);

        // Store unit into database
        $result = Unite::create($credentials);

        // Redirect back with success or error message
        if ($result) {
            session()->regenerate();
            return redirect()->back()->with("success_msg", "Unit created successfully.");
        } else {
            return redirect()->back()->withErrors(["error_msg"=>"Unable to create unit. Please try again later!"]);
        }
    }

    // Logic to create a methods to destroy unite
    public function unites_destroy(string $id){
        $id = base64_decode(strip_tags($id));

        // Logic to perform delete operation
        $result = Unite::findorFail($id)->delete();
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
        
        $result = Categories::create([
            "name"=> $request->name,
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
            return redirect()->back()->with("success_msg", "Category deleted successfully.");
        }else{
            return redirect()->back()->with("error_msg", "Category deleted successfully");
        }
    }
}
