<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestForm;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('backend.post.list',compact('posts'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('backend.post.create',compact('categories'));
    }


    public function store(RequestForm $request)
    {
        $posts = new Post();
        $posts->name = $request->input('name');
        $posts->title = $request->input('title');
        $posts->content = $request->input('content');
        $posts->category_id = $request->select;
        $posts->save();
        return redirect()->route('posts.index');
    }


    public function show($id)
    {
        $posts = Post::all()->where('id',$id);
        return view('backend.post.detail',compact('posts'));
    }


    public function edit($id)
    {
        $categories = Category::all();
        $posts = Post::all()->where('id', $id)->first();
        return view('backend.post.update', compact('id', 'posts','categories'));
    }


    public function update(RequestForm $request, $id)
    {
        $posts = Post::all()->where('id', $id)->first();
        $posts->name = $request->input('name');
        $posts->title = $request->input('title');
        $posts->content = $request->input('content');
        $posts->save();
        return redirect()->route('posts.index', compact('posts'));
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
