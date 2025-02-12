<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    // Attributes casting
    protected $hidden = ["payment_id"];
    protected $fillale = ["user_id", "product_id", "current_payment", "payable_amount", "total_amount", "payment_methods", "payment_id", "order_id", "payment_status"];
    protected $guarded = ["id"];

}
