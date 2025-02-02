<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    public $timestamps = false;
    protected $fillable = ["name"];
    protected $guarded = ["id"];

    // Logic to create some mutators function
    public function setNameAttribute($value){
        $this->attributes["name"] = strip_tags(ucwords(trim($value)));
    }
}
