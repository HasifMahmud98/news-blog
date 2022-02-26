<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//models
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::orderBy('id', 'DESC')->get();

        return view('backend.blog.index', compact('data'));
    }

    public function create()
    {
        $data = BlogCategory::orderBy('id', 'DESC')->get();

        return view('backend.blog.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'category'      => 'required',
            'thumbnail'     => 'required',
            'description'   => 'required',
            'author'        => 'required',
        ]);

        //store blogs starts
            $blog = new Blog;
            $blog->title = $request->title;
            $blog->category_id = $request->category;
            $blog->description = $request->description;
            $blog->author = $request->author;
        //store blogs ends


        if ($request->hasFile('thumbnail')) 
        {
            $image              = $request->file('thumbnail');
            $imageName          = uniqid() . '.' . $image->getClientOriginalExtension();
            $directory          = 'uploads/';
            $image->move($directory, $imageName);
            $imageUrl           = $directory . $imageName;

            $blog->thumbnail    = $imageUrl;
        }

        $blog->save();

        return redirect()->route('blog')->with('status', 'success')->with('message', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $data = Blog::findOrFail($id);

        return view('backend.blog.edit', compact('data'));
    }
}
