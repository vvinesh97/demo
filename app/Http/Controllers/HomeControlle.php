<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlle extends Controller
{
   //  public function home(){
   //      return view("home");
   //   }
   //   public function welcome(){
   //      return view("welcome");
   //   }
     public function index(){
        return view("eduleb.index");
     }
     public function about(){
      return view("eduleb.about");
   }
   public function contact(){
      return view("eduleb.contact");
   }
}
