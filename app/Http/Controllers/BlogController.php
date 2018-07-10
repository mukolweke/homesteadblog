<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {

        return view('blogs.create');

    }


    public function store(Request $request)
    {

        $blog = new Blog();
        $blog->title = $request['title'];
        $blog->body = $request['body'];
        $request->user()->blogs()->save($blog);

        return redirect()->route('welcome');

    }


    public function show($id)
    {
        //just one
        $this_blog = Blog::where('id',$id)
            ->first();

        //get all
        $blogs = \App\Blog::all();


        return view('blogs.view_blog',['blogs' => $blogs, 'this_blog'=>$this_blog]); //compact('this_blog')
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {

        $delete = Blog::destroy($id);
        if($delete){

            return view('/welcome',['success'=>'Article Deleted']);
        }else{

            return view('/welcome',['error'=>'Article not Deleted']);
        }
    }
}
