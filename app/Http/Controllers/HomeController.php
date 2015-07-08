<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $postType = '精選文章';

        $posts = \App\Post::where('is_feature', 1)
                          ->orderBy('created_at', 'desc')
                          ->paginate(5);

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }
}
