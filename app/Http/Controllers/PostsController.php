<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $postType = '文章總覽';

        $posts = \App\Post::orderBy('created_at', 'desc')
                          ->get();

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }

    public function hot()
    {
        $postType = '熱門文章';

        $posts = \App\Post::orderBy('page_view', 'desc')
                          ->orderBy('created_at', 'desc')
                          ->get();

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }

    public function random()
    {
        $id = rand(1, 20);

        $post = \App\Post::find($id);

        $data = compact('post');

        return view('posts.show', $data);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return 'posts.store';
    }

    public function show($id)
    {
        $post = \App\Post::find($id);

        $data = compact('post');

        return view('posts.show', $data);
    }

    public function edit($id)
    {
        $data = compact('id');

        return view('posts.edit', $data);
    }

    public function update($id)
    {
        return 'posts.update'.$id;
    }

    public function destroy($id)
    {
        return 'posts.destroy'.$id;
    }

    public function comment($id)
    {
        return 'posts.comment'.$id;
    }
}
