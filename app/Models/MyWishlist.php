<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyWishlist extends Model
{
    // Attribute casting
    public $timestamps = false;
    protected $fillable = ["product_id", "user_id"];
    protected $guarded = ["id"];
}
