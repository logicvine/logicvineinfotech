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
        return view('admin.contact.view');
    }
    public function submitblogform(Request $request)
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
        $body = $request->phone.'<- This is contact number, & email is ->'.$request->email;

        $response = $mailService->sendMail($to, $subject, $body);
        return response()->json([
            'success' => true,
            'message' => 'Your request hasa been send'
        ], 200);
        }
    
    public function contactusform(Request $request)
    {   

        if ($request->isMethod('post')) {
            // dd($request->all());    
            $validate = $request->validate([
                'cataegory' => 'nullable|string|max:100',
                // 'image' => 'nullable',
                'heading' => 'nullable|string|max:100',
                'description' => 'nullable|string|max:100',
            ]);

            if ($files = $request->file('image')) {
                $imageName = uniqid() . '.' . $files->extension();
                $files->move(public_path('gallery'), $imageName);
                $validate['image'] = $imageName;
            }
            Blog::create($validate);
            return back()->with('success', 'Thank you for contacting us!');
        }
        else {
            return view('admin.blog.create');
        }
    }
    public function viewblog(Request  $request){
        $data = DB::table('blogs')->get();
        return view('admin.blog.view', compact('data'));

    }
}
