<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class profileController extends Controller
{
    function index()
    {
        return view('profile');
    }
    function edit()
    {
        return view('editor');
    }
   
       function image()
    {
        return view('image');
    }
    function upload(Request $req)
    {
        $imagePath = $req->file('image')->store('public/uploads');
        $blog=new  Blog;
        $blog->blog_id=$req->blogid;
        $blog->title=$req->title;
        $blog->description=$req->description;
        $blog->image_path= $imagePath;

       $blog->save();
       return redirect('/post');
    }
    function post()
    {
       $post=Blog::all();
       return view('post',['post'=>$post]);
    }
   
   
}

    
       
?>
