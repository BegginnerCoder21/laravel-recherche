<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

    public function Recherche(Request $request){

        $req = $request->req;
        $posts = Post::where('title','like','%' . $req . '%')->orWhere('content','like','%' . $req . '%')->get();

        return response()->json([
            'posts' => $posts
        ]);
    }
}
