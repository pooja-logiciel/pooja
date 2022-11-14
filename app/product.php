<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table='product';
    protected $primaryKey = "product_id";

    public function category(){
        return $this->belongsTo(category::class,'category_id');
    }
    public function comment(){
        return $this->hasMany(comment::class,'product_id');
    }
}
