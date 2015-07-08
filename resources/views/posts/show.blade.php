@extends('layouts.master')

@section('title', $post->title)

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/post-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->sub_title }}</h2>
                    <span class="meta">由 <a href="#">Start Bootstrap</a> 發表於 {{ $post->created_at->toDateString() }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div style="margin-bottom: 30px;">
                    {!! $post->content !!}
                </div>

                <!-- Comments Form -->
                <div class="well">
                    <h4>留下您的意見：</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">送出</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
                @foreach($post->comments as $comment)
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comment->name }} ({{ $comment->email }})
                            <small>{{ $comment->created_at->toDateString() }}</small>
                        </h4>
                        {!! $comment->content !!}
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</article>
@endsection