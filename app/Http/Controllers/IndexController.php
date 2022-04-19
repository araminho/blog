<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function post($postId, $commentId = null) {
        //return redirect()->route('home');
        // return redirect("/");
        return "Post $postId, comment $commentId";
    }
}
