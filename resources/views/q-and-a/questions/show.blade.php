@extends('layouts.scaffold')

@section('main')

<div>{{ $question->question_id }}</div>
<div>{{ $question->title}}</div>
<div>{!! nl2br(e($question->description)) !!}</div>
<div><a href="{!! '/q-and-a/questions/' .  $question->question_id  . '/answers/create' !!}">回答する</a></div>
<div><a href="/q-and-a">一覧に戻る</a></div>

@stop
