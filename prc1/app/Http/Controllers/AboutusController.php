<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
        $data = 'hello world';
        return view('aboutus', compact('data'));
    }

    public function postList(){
        $posts = Post::get();
        return view('posts', compact('posts'));
    }
}
