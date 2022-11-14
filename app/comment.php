<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table='comment';
    protected $primaryKey = "comment_id";
    public $updated_at="false";
    public $created_at="false";

    public function product(){
        return $this->belongsTo(product::class,'product_id');
    }
     public function users(){
        return $this->belongsTo(users::class,'userid');
    }
}
