
@extends('layouts.app')

@section('header')
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="{{ asset('js/post.js') }}"></script>
@endsection

@section('content')
    <div class="wrapper">
    <div class="header"><h1>投稿ページ</h1></div>
    <div class="content_wrapper">
    <div class="content2">

        <form action="/post" method="post" name="ansform" enctype="multipart/form-data">
            @csrf
            <p>タイトル</p>
            <input type="text" name="title" class="formtitle">
            <p>&nbsp;</p>
            <p>本文</p>
            <div id="editor" style="height: 200px;"></div>
            <input type="hidden" name="content">
            <p>&nbsp;</p>
            <input type="submit" class="submitbtn" name="subbtn">
        </form>
    </div>
    </div>
    </div>
@endsection
