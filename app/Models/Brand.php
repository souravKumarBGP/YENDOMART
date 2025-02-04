<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    // Attribute casting
    public $timestamps = false;
    protected $fillable = ["name", "slug", "category_name", "brand_img"];
    protected $guarded = ["id", "_token"];

    // Logic to create some mutators function
    public function setNameAttribute($value){
        $this->attributes["name"] = strip_tags(strtolower(trim($value)));
    }
    public function setCategoryNameAttribute($value){
        $this->attributes["category_name"] = strtolower(strip_tags($value));
    }
    public function setBrandImgAttribute($value){
        $this->attributes["brand_img"] = strip_tags($value);
    }

    // Logic to create some getter function
    public function getNameAttribute($value){
        return ucwords($value);
    }
    // Logic to create some getter function
    public function getCategoryNameAttribute($value){
        return ucwords($value);
    }
}
