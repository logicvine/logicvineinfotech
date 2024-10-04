<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
 public function submitblogform(){
    return view('admin.blog.create');
 }
}
