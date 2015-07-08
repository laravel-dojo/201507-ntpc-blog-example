<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function hot()
    {
        return view('posts.index');
    }

    public function random()
    {
        $id = rand(1, 10);

        $data = compact('id');

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
        $data = compact('id');

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
