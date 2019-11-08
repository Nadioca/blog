<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class BlogController extends Controller
{

    public function index(){
        return view('blog');
    }
    
    public function show($slug){

        $post = Post::where('slug', $slug)->firstOrFail();

        return view('blog_detalle', array(
            'post' => $post
        ));

    }

}
