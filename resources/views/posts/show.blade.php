@extends('layouts.master')

@section('title', '文章詳細頁')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/post-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>文章標題 {{ $id }}</h1>
                    <h2 class="subheading">文章副標題</h2>
                    <span class="meta">由 <a href="#">Start Bootstrap</a> 發表於 August 24, 2014</span>
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
                    文章內容…
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
                @foreach(range(1, rand(1, 10)) as $id)
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">姓名 (Email)
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        留言回覆內容 {{ $id }}
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</article>
@endsection