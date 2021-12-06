<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        
        return view('index');
    }
    
    public function about(){
        
        return 'About Page';
    }
    
    public function services(){
        
        return 'Services Page';
    }
}
