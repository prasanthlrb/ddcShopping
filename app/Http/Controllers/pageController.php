<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
   public function about(){
    return view('about');
   }

   public function terms(){
    return view('terms');
   }

   public function faq(){
    return view('faq');
   }
   public function contact(){
    return view('contact');
   }
}
