<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function form(){
        return view('admin.formlayouts');
    }
    public function contactus(){
        return view('admin.contact.view');
    }
public function contactusform(Request $request){
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:100',
            'phone' => 'nullable|string|max:15',
            'cmpname' => 'nullable|string|max:100',
            'message' => 'nullable|string',
        ]);

        // dd($validate);

        /***
         * array:6 [▼ // app\Http\Controllers\adminController.php:22
  "_token" => "7OUfcUZJVin6mLmFvhOpK50e9y8B81EwsYqTHzLu"
  "name" => "vobabo@mailinator.com"
  "email" => "qimy@mailinator.com"
  "phone" => "+1 (483) 234-6867"
  "cmpname" => "migikozev@mailinator.com"
  "message" => "Odit quo ipsum quod"
]
         */

        ContactUs::create($validate);


        return back()->with('success', 'Thank you for contacting us!');
}
}
}
