<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // Attribute casting
    public $timestamps = false;
    protected $fillable = ["name","slug", "category_img"];
    protected $guarded = ["id", "_token"];

    // Logic to create some mutators function
    public function setNameAttribute($value){
        $this->attributes["name"] = strip_tags(strtolower(trim($value)));
    }
    public function setCategoryImgAttribute($value){
        $this->attributes["category_img"] = strip_tags($value);
    }

    // Logic to create some getter function
    public function getNameAttribute($value){
        return ucwords($value);
    }
}
