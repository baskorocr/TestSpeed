<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\ReviewRating;
use Session;

class PostController extends Controller
{
  
    public function store(Request $request){
        $post = new Post();
        $post->author = $request->author;
        $post->title  = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('home');

    }

    public function view(){
        $data = Post::paginate(3);    
        return view ('home', ['data' => $data]);
    }


    
}