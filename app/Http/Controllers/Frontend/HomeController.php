<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {   
        return view('frontend.home');
    }
    public function sign_in(){

    }
    public function sign_up(){
        
    }
}