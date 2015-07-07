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
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>標題</label>
                        <input type="text" class="form-control" placeholder="標題" id="title" required data-validation-required-message="請輸入文章標題">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>副標題</label>
                        <input type="text" class="form-control" placeholder="副標題" id="sub_title" required data-validation-required-message="請輸入文章副標題">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>內文</label>
                        <textarea rows="5" class="form-control" placeholder="內文" id="content" required data-validation-required-message="請輸入文章內文"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <p style="font-size: 1.5em; color: #555; margin-bottom: 0">設定為精選文章？</p>
                        <input type="radio" name="blankRadio" id="blankRadio1" value="option1"> 是
                        <input type="radio" name="blankRadio" id="blankRadio1" value="option1"> 否
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">送出</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection