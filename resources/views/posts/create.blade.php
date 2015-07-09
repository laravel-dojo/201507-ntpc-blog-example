@extends('layouts.master')

@section('title', '新增文章')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/contact-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>新增文章</h1>
                    <hr class="small">
                    <span class="subheading">請填寫以下表單來新增文章</span>
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

            {!! Form::open(['route' => 'posts.store', 'method' => 'post', 'name' => 'sentMessage', 'id' => 'contactForm', 'novalidate']) !!}
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('title', '標題') !!}
                        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => '標題', 'data-validation-required-message' => '請輸入文章標題', 'required']) !!}
                        <p class="help-block text-danger" style="color: red;">{!! $errors->first('title') !!}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('sub_title', '副標題') !!}
                        {!! Form::text('sub_title', null, ['id' => 'sub_title', 'class' => 'form-control', 'placeholder' => '副標題', 'data-validation-required-message' => '請輸入副文章標題', 'required']) !!}
                        <p class="help-block text-danger" style="color: red;">{!! $errors->first('sub_title') !!}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('content', '內文') !!}
                        {!! Form::textarea('content', null, ['id' => 'content', 'rows' => 5, 'class' => 'form-control', 'placeholder' => '內文', 'data-validation-required-message' => '請輸入文章內文', 'required']) !!}
                        <p class="help-block text-danger" style="color: red;">{!! $errors->first('content') !!}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <p style="font-size: 1.5em; color: #555; margin-bottom: 0">設定為精選文章？</p>
                        {!! Form::radio('is_feature', 1, false) !!} 是
                        {!! Form::radio('is_feature', 0, true) !!} 否
                        <p class="help-block text-danger" style="color: red;">{!! $errors->first('is_feature') !!}</p>
                    </div>
                </div>

                {!! Form::hidden('user_id', Auth::user()->id) !!}

                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        {!! Form::submit('送出', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection