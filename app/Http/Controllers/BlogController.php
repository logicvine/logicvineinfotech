<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function viewblog(Request  $request)
    {
        $data = DB::table('blogs')->get();
        return view('admin.blog.view', compact('data'));
    }
    public function adminblogpage(Request $request)
    {
        if ($request->isMethod('post')) {
            $validate = $request->validate([
                'cataegory' => 'required|string|max:100',
                'heading' => 'required|string|max:100',
                'description' => 'required|string|max:100',
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
    public function blogdetial($id)
    {
        $item = Blog::find($id);
        if (!$item) {
            abort(404); // Handle missing item
        }
        $data = DB::table('blogs')->where('id' , $id)->get();
        return view('blogdeatils' ,compact('data'));
    
    }
}
