<?php

namespace App\Http\Controllers;
use App\product;
use App\category;
use App\comment;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{  
    /* add product */
      public function addproduct(Request $request){
     $product=new product;
     
      $product->name=$request->get('product_name');
      $product->description=$request->get('details');
      $product->category_id=$request->get('cate');
     if($request->hasfile('image')){
       $file=$request->file('image');
       $extension=$file->getClientOriginalExtension();
       $filename=time().'.'.$extension;
       $file->move('uplaod/image',$filename);
       $product->image=$filename;
        $data=$product->save();
        if($data)
       {
         return back()->with('success','your product add into database');
       }
       else
       {
        return back()->with('failed','oops some error');
       }
       
     }
   
  }
  /* category*/
  public function category($id){
    $category=$id;
       $cate=category::all();
    $data=product::where('category_id',$category)->with('category','comment.users')->get(); 
    return view('category',compact('data','cate'));
  }
  /*search */
  public function search(Request $request){

   $search=$request->text;
   $cate=category::all();
   //if($search != '') {
    if(product::where('name','LIKE', '%'.$search.'%'))
      {
        echo "yes";
      }
      else
      {
        echo "noo";
      }
   // }
    //dd($data->toarray());
   // if($data)
   // {
   //    echo "yess";
   // }
   // else
   // {
   //   echo "noo";
   // }
   // return view('search',compact('data','cate'));
  }
  /* submit comment */
  public function submit(Request $request){
    $data=new comment;
    $data->userid=3;
    $data->commentlist=$request->text;
    $data->product_id=$request->id;
    $data=$data->save();
    if($data)
    {
       return back()->with('success','your product add into database');
    }
    else
    {
       return back()->with('failed','oops some error');
    }
  }
  /* comment*/
  public function comment($id){
      $data=product::where('product_id',$id)->withcount('comment')->with('category','comment.users')->get();
           //dd($data->toarray());
        return view('comments',compact('data'));
  }
    public function home(){
        $data=product::with('category','comment.users')->get();
        $cate=category::all();
        //dd($cate->toArray());
        return view('home',compact('data','cate'));
    }

    public function productid($id){
         $data=product::where('product_id',$id)->with('category','comment')->get();
         // dd($data->toArray());
         return view('sperate',compact('data'));
    }
 
}
  