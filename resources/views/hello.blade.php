@extends('layouts.scaffold')

@section('main')
    <h1>Hello world!</h1>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
    {{var_dump(\App\Post::all()->toArray())}}
    @endif

    <div>
        <ul>
            <li><a href="/q-and-a">練習用アプリ：質問＆回答</a></li>
        </ul>
    </div>
    
@stop
