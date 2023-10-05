<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function Index(){
        $posts = post::latest()->get();
        return view('admin.create', compact('posts'));
    }
    public function AddPost(){
        return view('admin.addpost');
    }
    public function StorePost(Request $request){
        $response = Http::get('http://jsonplaceholder.typicode.com/posts');
        
    }
 
    }
