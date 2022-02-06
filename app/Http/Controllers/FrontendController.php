<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//models
use App\Models\Blog;

class FrontendController extends Controller
{
    public function index() 
    {
        // $blogs = Blog::all();

        $blogs = Blog::orderBy('id')->get();

        // $blogs = Blog::orderBy('id', 'DESC')->get();
        // $blogs = Blog::find(1);
        // $blogs = Blog::findOrFail(1);
        return view('frontend.index', compact('blogs'));
        // return view('frontend.index')->with('data', $blogs);
    }

    public function singleBlog($id)
    {
        $blog = Blog::findOrfail($id);
        return view('frontend.blog_view', compact('blog'));
    }
}
