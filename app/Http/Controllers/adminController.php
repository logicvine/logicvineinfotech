<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Blog;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use App\Mail\PHPMailerService;
use Illuminate\Support\Facades\Mail as FacadesMail;
// use Mail;
use Symfony\Component\CssSelector\Node\FunctionNode;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function form()
    {
        return view('admin.formlayouts');
    }
    public function contactus()
    {
        $data = DB::table('contact_us')->get();
        return view('admin.contact.view',compact('data'));
    }
    public function submitcontactus(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|max:15|regex:/^[7-9][0-9]{9}$/',
            'cmpname' => 'required|string|max:100',
            'message' => 'required|string',
        ]);
        ContactUs::create($validate);
        $mailService = new ContactUsMail();
        $to = 'rishishekhawat.img@gmail.com';
        $subject = 'You have receive Notification for contact';
        $body = $request->phone . '<- This is contact number, & email is ->' . $request->email;

        $response = $mailService->sendMail($to, $subject, $body);
        return response()->json([
            'success' => true,
            'message' => 'Your request hasa been send'
        ], 200);
    }


    
}
