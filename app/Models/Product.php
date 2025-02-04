<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Attribute casting
    public $timestamps = false;
    protected $guarded = ["id", "remember_token"];
    protected $fillable = ["name", "slug", "selling_price", "discount_price", "total_quentity", "available_quentity", "live_link", "unit", "category_name", "brand_name", "product_status", "sku", "thumbnail_img", "gallary_img", "product_discreption"];
    
    // Logic to create some mutators and getters function
    public function setNameAttribute($value){
        $this->attributes["name"] = strip_tags(strtolower(trim($value)));
    }
    public function setSkuAttribute($value){
        $this->attributes["sku"] = strip_tags(strtolower(trim($value)));
    }
    public function setSellingPriceAttribute($value){
        $this->attributes["selling_price"] = strip_tags(strtolower(trim($value)));
    }
    public function setDiscountPriceAttribute($value){
        $this->attributes["discount_price"] = strip_tags(strtolower(trim($value)));
    }
    public function setTotalQuanitiyAttribute($value){
        $this->attributes["total_quentity"] = strip_tags(strtolower(trim($value)));
    }
    public function setAvailableQuanitiyAttribute($value){
        $this->attributes["available_quentity"] = strip_tags(strtolower(trim($value)));
    }
    public function setLiveLinkAttribute($value){
        $this->attributes["live_link"] = strip_tags(strtolower(trim($value)));
    }
    public function setUnitAttribute($value){
        $this->attributes["unit"] = strip_tags(strtolower(trim($value)));
    }
    public function setCategoryNameAttribute($value){
        $this->attributes["category_name"] = strip_tags(strtolower(trim($value)));
    }
    public function setBrandNameAttribute($value){
        $this->attributes["brand_name"] = strip_tags(strtolower(trim($value)));
    }
    public function setProductStatusAttribute($value){
        $this->attributes["product_status"] = strip_tags(strtolower(trim($value)));
    }
    public function setThumbnailImgAttribute($value){
        $this->attributes["thumbnail_img"] = strip_tags(strtolower(trim($value)));
    }
    public function setGallaryImgAttribute($value){
        $this->attributes["gallary_img"] = strip_tags(strtolower(trim($value)));
    }
    public function setProductDiscreptionAttribute($value){
        $this->attributes["product_discreption"] = strip_tags(strtolower(trim($value)));
    }

    protected $casts = [
        "gallary_img"=> "json",
        "product_discreption" => "json"
    ];
}
