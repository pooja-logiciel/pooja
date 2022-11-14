<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;
use App\comment;

class index extends Controller
{
   
    public function show($id){
     $comment=category::find($id)->product->flatmap->comment;
     return $comment;
    }
}
