<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function webdevelopment(){
        return view('services.webdevelopment');
    }
    public function mobileappdevelopment(){
        return view('services.mobileappdevelopment');
    }
    public function softwaredevelopment(){
        return view('services.softwaredevelopment');
    }
    public function ecommerce(){
        return view('services.ecommerce');
    }
}
