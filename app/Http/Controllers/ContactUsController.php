<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function webdevelopment(){
        $data = DB::table('blogs')->get();
        return view('services.webdevelopment',compact('data'));
    }
    public function mobileappdevelopment(){
        $data = DB::table('blogs')->get();
        return view('services.mobileappdevelopment',compact('data'));
    }
    public function softwaredevelopment(){
        $data = DB::table('blogs')->get();
        return view('services.softwaredevelopment' ,compact('data'));
    }
    public function ecommerce(){
        $data = DB::table('blogs')->get();
        return view('services.ecommerce',compact('data'));
    }
}
