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
       $blog=new  Blog;
       
       $blog->blog_id=$req->blogid;
       $blog->title=$req->title;
       $blog->description=$req->description;

       $blog->save();
       return "hello";
    }
   
}

    
       
?>
