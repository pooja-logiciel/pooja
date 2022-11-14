<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product;
use App\comment;

class category extends Controller
{
  public function category(){
    return $this->hasMany('App\category');
  }
}
