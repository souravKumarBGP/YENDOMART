<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    // Attribute casting
    protected $hidden = ["password", "role"];
    protected $fillable = ["name", "email", "password", "profile_img"];
    protected $guarded = ["id"];

    // Logic to careate some mutators and getters function
    function setNameAttribute($value){
        $this->attributes["name"] = strtolower(trim(strip_tags($value)));
    }
    function setEmailAttribute($value){
        $this->attributes["email"] = strtolower(trim(strip_tags($value)));
    }
    function setPasswordAttribute($value){
        $this->attributes["password"] = Hash::make($value);
    }

    function getNameAttribute($value){
        return ucwords($value);
    }

}
