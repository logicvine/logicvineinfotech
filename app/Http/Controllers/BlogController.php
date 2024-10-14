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
        } else {
            return view('admin.blog.create');
        }
    }
    public function edit($id)
    {
        
        $data = DB::table('blogs')->where('id',$id)->first();
// dd($data);
        return view('admin.blog.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
 
        $validate = $request->validate([
            'cataegory' => 'required|string|max:100',
            'heading' => 'required|string|max:100',
            'description' => 'required|string|max:100',
        ]);

        if ($files = $request->file('image')) {
            if (file_exists(public_path('gallery') . '/' . $blog->image)) {
                unlink(public_path('gallery') . '/' . $blog->image);
            }
            $imageName = uniqid() . '.' . $files->extension();
            $files->move(public_path('gallery'), $imageName);
            $validate['image'] = $imageName;
        }
            
        $blog->update($validate);
        return redirect()->route('show.blog')->with('success', 'Blog updated successfully!');
    }
    public function destroy($id)
    {  
        $blog = Blog::findOrFail($id);

        if (file_exists(public_path('gallery') . '/' . $blog->image)) {
            unlink(public_path('gallery') . '/' . $blog->image);
        }
        $blog->delete();
        return redirect()->route('show.blog')->with('success', 'Blog deleted successfully!');
    }
    public function blogdetial($id)
    {
        $item = Blog::find($id);
        if (!$item) {
            abort(404); 
        }
        $data = DB::table('blogs')->where('id', $id)->get();
        return view('blogdeatils', compact('data'));
    }
}
