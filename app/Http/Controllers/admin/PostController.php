<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index()
    {
        return view('admin.pages.home');
    }
    public function post()
    {
        $post=Post::all();
        return view('admin.pages.Post',compact('post'));
    }
    public function creat()
    {
        $tags = Tag::orderBy('id', 'DESC')->get();
        return view('admin.pages.Postcreat',compact('tags'));
    }

    public function savePost (Request $request)
    {
        $post = new post;
        $post->description = $request->get('description');
        $post->content = $request->get('content');
        $post->count = $request->get('count');
        $post->user()->associate($request->user()->id);
//        $image = $request->file('file');
//        $slug = str_slug($request->description);
//        $fileName = rand(0,9999).$slug.'-post.'.$image->getClientOriginalExtension();
//        $request->request->add(['image' => $fileName]);
//        $request->request->add(['user_id' => Auth::user()->id]);
//        $image->move(public_path('images'),$fileName);
        if ($request->hasFile('file')){
            $name = time().".".$request->file("file")->extension();
            $post->image = $name;
            $request->file("file")->move(public_path().'/images', $name);
        }

        $post->save();
        $post->tag()->sync($request->tags);
        return back();

    }

    public function edit($id)
    {
        $post=Post::findorFail($id);
        $tag=Tag::all();
        return view('admin.pages.PostEdit',compact('tag','post'));

    }
    public function update($id, Request $request)
    {

        $post =Post::findorfail($id);
        $post->update($request->only('count','description','content','image'));
        return back();

    }
    public function delete($id,Request $request)
    {
        $post =Post::findorfail($id);
        $post->delete();
        return back();
    }
}
