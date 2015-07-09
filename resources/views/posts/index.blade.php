@extends('layouts.master')

@section('title', $postType)

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/home-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>{{ $postType }}</h1>
                    <hr class="small">
                    <span class="subheading">歡迎瀏覽{{ $postType }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @include('layouts.partials.notification')

            @if (Auth::check())
            <div class="text-right">
                <a href="{{ route('posts.create') }}" class="btn btn-primary" role="button">新增</a>
            </div>
            @endif

            @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{ route('posts.show', $post->id) }}">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post->sub_title }}
                    </h3>
                </a>
                <p class="post-meta">由 <a href="{{ route('posts.user', $post->user->id) }}">{{ $post->user->name }}</a> 發表於 {{ $post->created_at->toDateString() }}</p>
            </div>
            <hr>
            @endforeach
            
            <!-- Pager -->
            <nav class="text-center">
                {!! $posts->render() !!}
            </nav>
        </div>
    </div>
</div>
@endsection