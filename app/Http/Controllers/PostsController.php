<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['my', 'create', 'store', 'edit', 'update', 'destroy']]);
    }

    public function index()
    {
        $postType = '文章總覽';

        $posts = \App\Post::orderBy('created_at', 'desc')
                          ->paginate(5);

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }

    public function hot()
    {
        $postType = '熱門文章';

        $posts = \App\Post::where('page_view', '>=', 100)
                          ->orderBy('page_view', 'desc')
                          ->orderBy('created_at', 'desc')
                          ->paginate(5);

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }

    public function random()
    {
        $post = \App\Post::all()->random();

        if (is_null($post)) {
            return redirect()->route('posts.index')
                             ->with('warning', '目前沒有文章');
        }

        $data = compact('post');

        return view('posts.show', $data);
    }

    public function my()
    {
        $postType = '我的文章';

        $posts = \App\Post::where('user_id', \Auth::user()->id)
                          ->orderBy('created_at', 'desc')
                          ->paginate(5);

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }

    public function user($id)
    {
        $user = \App\User::find($id);

        if (is_null($user)) {
            return redirect()->route('posts.index')
                             ->with('warning', '沒有這個使用者的文章');
        }

        $postType = $user->name.'的文章';

        $posts = \App\Post::where('user_id', $user->id)
                          ->orderBy('created_at', 'desc')
                          ->paginate(5);

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = \App\Post::create($request->all());

        return redirect()->route('posts.show', $post->id)
                         ->with('success', '新增文章完成');
    }

    public function show($id)
    {
        $post = \App\Post::find($id);

        if (is_null($post)) {
            return redirect()->route('posts.index')
                             ->with('warning', '找不到該文章');
        }

        $post->page_view += 1;
        $post->save();

        $data = compact('post');

        return view('posts.show', $data);
    }

    public function edit($id)
    {
        $post = \App\Post::find($id);

        if (is_null($post)) {
            return redirect()->route('posts.index')
                             ->with('warning', '找不到該文章');
        }

        if ($post && $post->user->id != \Auth::user()->id) {
            return redirect()->route('posts.index')
                             ->with('warning', '您沒有權限編輯這篇文章');
        }

        $data = compact('post');

        return view('posts.edit', $data);
    }

    public function update($id, PostRequest $request)
    {
        $post = \App\Post::find($id);

        if (is_null($post)) {
            return redirect()->route('posts.index')
                             ->with('warning', '找不到該文章');
        }

        $post->update($request->all());

        return redirect()->route('posts.show', $post->id)
                         ->with('success', '文章更新完成');
    }

    public function destroy($id)
    {
        $post = \App\Post::find($id);

        if (is_null($post)) {
            return redirect()->route('posts.index')
                             ->with('warning', '找不到該文章');
        }

        if ($post && $post->user->id != \Auth::user()->id) {
            return redirect()->route('posts.index')
                             ->with('warning', '您沒有權限刪除這篇文章');
        }

        foreach($post->comments as $comment) {
            $comment->delete();
        }

        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success', '刪除文章及留言成功');
    }

    public function comment($id, CommentRequest $request)
    {
        $post = \App\Post::find($id);
        
        if (is_null($post)) {
            return redirect()->route('posts.index')
                             ->with('warning', '找不到該文章');
        }

        $comment = \App\Comment::create($request->all());

        $post->comments()->save($comment);

        return redirect()->route('posts.show', $post->id)
                         ->with('success', '回覆留言成功');
    }
}
