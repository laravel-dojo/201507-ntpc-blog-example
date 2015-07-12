@extends('layouts.master')

@section('title', '註冊作者')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/contact-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>註冊作者</h1>
                    <hr class="small">
                    <span class="subheading">請填寫以下表單成為作者</span>
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

            {!! Form::open(['route' => 'register.process', 'method' => 'post', 'name' => 'sentMessage', 'id' => 'contactForm', 'novalidate']) !!}
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('name', '姓名') !!}
                        {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => '姓名', 'data-validation-required-message' => '請輸入姓名', 'required']) !!}
                        <p class="help-block text-danger" style="color: red;">{!! $errors->first('name') !!}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('email', '帳號(Email)') !!}
                        {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => '帳號', 'data-validation-required-message' => '請輸入帳號', 'required']) !!}
                        <p class="help-block text-danger" style="color: red;">{!! $errors->first('email') !!}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('password', '密碼') !!}
                        {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => '密碼', 'data-validation-required-message' => '請輸入密碼', 'required']) !!}
                        <p class="help-block text-danger" style="color: red;">{!! $errors->first('password') !!}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('password_confirmation', '確認密碼') !!}
                        {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => '確認密碼', 'data-validation-required-message' => '請輸入確認密碼', 'required']) !!}
                        <p class="help-block text-danger" style="color: red;">{!! $errors->first('password_confirmation') !!}</p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        {!! Form::submit('註冊', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}

            {!! Form::open(['route' => 'openid.redirect', 'method' => 'post']) !!}
                {!! Form::submit('OpenID 登入', ['class' => 'btn btn-warning']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
