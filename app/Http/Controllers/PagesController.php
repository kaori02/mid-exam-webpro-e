<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Artikel;

class PagesController extends Controller
{
   public function index(){
       $artikels = Artikel::latest()->take(3)->get(); 
       return view('pages.index')->with('artikel',$artikels);
   }

   public function contact(){
    return view('pages.contact');
   }

}
