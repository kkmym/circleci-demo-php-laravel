@extends('layouts.scaffold')

@section('main')

<h1>Register User</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/users">
<div><input type="text" name="email" placeholder="Eメールアドレスを入力してください" /></div>
<div><input type="password" name="password" placeholder="パスワードを入力してください" /></div>
<div><input type="submit" value="登録" /></div>
{{csrf_field()}}
</form>

@stop
