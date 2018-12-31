@extends('layouts.scaffold')

@section('main')
    <h1>質問＆回答</h1>

    <p><a href="/q-and-a/questions/create">質問する</a></p>

    <table class="table">
        <thead>
            <tr><th>質問ID</th><th>質問内容</th><th>最新の回答</th><th>回答する</th></tr>
        </thead>
        <tbody>
@foreach ($questions as $question)
            <tr>
                <th scope="row">{{ $question->question_id}}</th>
                <td>
                    <div>
                        <div class="question_title"><strong>{{ $question->title }}</strong></div>
                        <div class="question_description">{{ $question->description }}</div>
                    </div>
                    <div><small>{{ $question->q_updated_at }}</small></div>
                </td>
                <td><div>{{ $question->answer }}</div><div><small>{{ $question->a_updated_at }}</small><small>（他 6件）</small></div</td>
                <td><a href="{!! '/q-and-a/questions/' .  $question->question_id  . '/answers/create' !!}">この質問に回答する</a></td>
            </tr>
@endforeach
        </tbody>
    </table>
@stop
