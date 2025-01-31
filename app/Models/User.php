<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    // Attribute casting
    protected $hidden = ["password", "role", "delivery_address", "pincode", "district", "state", "phone", "profile_img", "status", "famous_place", "created_at", "updated_at"];
    protected $fillable = ["full_name", "email","phone", "countary", "state", "district", "pincode", "famous_place", "delivery_address", "password", "profile_img"];
    protected $guarded = ["id", "countary"];

    // Logic to careate some mutators and getters function
    function setNameAttribute($value){
        $this->attributes["name"] = strtolower(trim(strip_tags($value)));
    }
    function setEmailAttribute($value){
        $this->attributes["email"] = strtolower(trim(strip_tags($value)));
    }
    function setPhoneAttribute($value){
        $this->attributes["phone"] = strtolower(trim(strip_tags($value)));
    }
    function setCountaryAttribute($value){
        $this->attributes["countary"] = strtolower(trim(strip_tags($value)));
    }
    function setStateAttribute($value){
        $this->attributes["state"] = strtolower(trim(strip_tags($value)));
    }
    function setDistrictAttribute($value){
        $this->attributes["district"] = strtolower(trim(strip_tags($value)));
    }
    function setPincodeAttribute($value){
        $this->attributes["pincode"] = strtolower(trim(strip_tags($value)));
    }
    function setFamousPlaceAttribute($value){
        $this->attributes["famous_place"] = strtolower(trim(strip_tags($value)));
    }
    function setDeleveryAddressAttribute($value){
        $this->attributes["delevery_address"] = strtolower(trim(strip_tags($value)));
    }
    function setPasswordAttribute($value){
        $this->attributes["password"] = bcrypt($value);
    }

    function getNameAttribute($value){
        return ucwords($value);
    }

}
