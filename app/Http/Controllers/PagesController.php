<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //this is the homepage
    public function index(){
      return view('index');
    }
    
    public function about(){

    }
}
