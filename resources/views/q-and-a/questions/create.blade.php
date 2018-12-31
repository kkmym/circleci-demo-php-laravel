@extends('layouts.scaffold')

@section('main')

<h1>質問投稿フォーム</h1>

@if (!\Auth::check())
<div class="alert alert-primary" role="alert">
投稿には、ログインが必要です。
</div>
@else
<form method="post" action="/q-and-a/questions" class="">
    {{ csrf_field() }}

    <label for="title">質問 - タイトル</label>
    <input name="title" id="title" type="text" placeholder="質問のタイトルを入力してください">

    <label for="question">質問 - 内容</label>
    <textarea name="question" id="question" placeholder="質問の内容を入力してください" rows="3"></textarea>

    <div>
        <button type="submit" class="btn btn-default">投稿する</button>
    </div>
</form>
@endif

@stop
