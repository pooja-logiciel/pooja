<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table='user';
      protected $primaryKey = "userid";

    public function comment(){
        return $this->hasMany(comment::class,'userid');
    } 
}
