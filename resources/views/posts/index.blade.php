@extends('layouts.master')

@section('title', '文章列表')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/home-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>文章列表</h1>
                    <hr class="small">
                    <span class="subheading">歡迎瀏覽本平台文章</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach(range(1, 5) as $id)
            <div class="post-preview">
                <a href="{{ route('posts.show', $id) }}">
                    <h2 class="post-title">
                        文章標題 {{ $id }}
                    </h2>
                    <h3 class="post-subtitle">
                        文章副標題
                    </h3>
                </a>
                <p class="post-meta">由 <a href="#">Start Bootstrap</a> 發表於 September 24, 2014</p>
            </div>
            <hr>
            @endforeach
            
            <!-- Pager -->
            <nav class="text-center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection