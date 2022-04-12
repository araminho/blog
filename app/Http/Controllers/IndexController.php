<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        //return redirect()->route('posts_and_comments', [50, 500]);
        return redirect('/posts/40/comments/400');
        //return view('welcome');
    }

    public function post($postId, $commentId = null) {
        //return redirect()->route('home');
        // return redirect("/");
        return "Post $postId, comment $commentId";
    }
}
