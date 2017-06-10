<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth',['except' => 'index']);
    }


    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Blog::create($input);
        return back();
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit',compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        return back();
    }

    public function destroy(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete($request->all());
        return redirect('/bin');
    }

    public function bin()
    {
        $deleteBlogs = Blog::onlyTrashed()->get();
        return view('blog.bin', compact('deleteBlogs'));

    }

    public function restore($id)
    {
        $restoreBlogs = Blog::onlyTrashed()->findOrFail($id);
        $restoreBlogs->restore($restoreBlogs);
        return redirect('/');
    }

    public function destroyBlog($id)
    {
        $deleteBlogs = Blog::onlyTrashed()->findOrFail($id);
        $deleteBlogs->forceDelete($deleteBlogs);
        return back();

    }


}
