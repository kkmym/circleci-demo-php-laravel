@extends('layouts.scaffold')

@section('main')

<h1>回答フォーム</h1>

<div>
    <h2>質問内容</h2>
    <div>{{ $question->title }}</div>
    <div>{{ $question->description }}</div>
</div>
<form action="{!! '/q-and-a/questions/' .  $question->question_id  . '/answers' !!}" method="post">
    {{ csrf_field() }}

    <label for="answer">回答</label>
    <textarea name="answer" id="answer" placeholder="回答を入力してください" rows="3">{{ old('answer') }}</textarea>

    <div>
        <button type="submit" class="btn btn-default">回答する</button>
    </div>
</form>

@stop
