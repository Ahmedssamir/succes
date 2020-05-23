<?php

namespace App\Http\Controllers;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use App\Http\Requests\mode;
use App\Offer;
use App\Traits\OfferTrait;
use App\Events\videoviwer;
class Appcontroller extends Controller
{
    use OfferTrait;
    public function create(){

        return view('view.vi');
        
    }
  
public function hom(){
    return view ('view.dd');
}

    public function send(mode $request){
   
     $file_name=$this->SaveImage($request->file('photo'),'Imagee');

   $off= Offer::create([
        'photo'=>$file_name,
        'name'=>$request->name,
        'price'=>$request->price,
        'adress'=>$request->adress,
        
     
   
   ])
 
   ;
   return redirect()->route('show');
}
//
  public function use(){
     return view('auth.register');
 }



 function getvideo($id){
     $off=Offer::Find($id);
   if(!off)
   return redirect()->back(); }
 

public function table(){
    $offers=Offer::all();
 return view('view.dd')->with('offers',$offers);
 
}
public function show(){
    return view('show');
}


}
