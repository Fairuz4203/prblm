<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
  
    function register(){
        return view('frontend.register');
    }
   function index(){
    return view('frontend.index');
   }

    function about(){
      return view('frontend.about');
    }
   
}

