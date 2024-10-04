<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
 public function index(){
    return view('index');
   }
   public function about(){
    return view('about');
 }
   public function bloglist(){
    return view('bloglist');
 }
   public function blogdeatils(){
    return view('blogdeatils');
 }
   public function contact(){
    return view('contactus');
 }
 
}
