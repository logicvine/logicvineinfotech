<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
 public function index(){
   $data = DB::table('blogs')->get();
    return view('index' ,compact('data'));
   }
   public function about(){
    return view('about');
 }
   public function bloglist(){
      $data = DB::table('blogs')->get();
    return view('bloglist' , compact('data'));
 }
   public function blogdeatils(){
    return view('blogdeatils');
 }
   public function contact(){
    return view('contactus');
 }
 
}
