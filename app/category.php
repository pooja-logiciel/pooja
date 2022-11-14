<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  protected $table='category'; 
  protected $primaryKey = "category_id";
   
   public function product(){
    return $this->hasMany(product::class,'category_id');
   } 
   
}
