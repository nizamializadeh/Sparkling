<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Post;
use  App\Tag;


class PostController extends Controller
{
    public function index()
    {
        $post=Post::all();
        $tag=Tag::all();
        $posts_trend = Post::orderBy('count', 'DESC')->take(4)->get();
        return view('frontend.pages.home',compact('post','posts_trend','limit',"tag"));
    }
    public function single($id)
    {
        $post=Post::findorFail($id);
        $tag=Tag::all();
        $post_count = $post->count +=1;
        return view('frontend.pages.single',compact('tag','post','id','post_count'));
    }
}
