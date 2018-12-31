<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>
    </head>

    <body>
        <div class="container">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @yield('main')

            <div class="well">
                @if (Auth::user())
                    {{{ Auth::user()->email }}}としてログイン中
                    <a href="javascript:void(0)" onclick="document.frmLogout.submit();return false;" class="btn btn-default">ログアウト</a>
                    <form action="/logout" method="post" name="frmLogout" style="display: none"></form>
                @else
                    <div>ログインしていません</div>
                    <a href="/login" class="btn btn-default">ログイン</a> または <a href="/users/create" class="btn btn-primary">会員登録</a>
                @endif
            </div>
        </div>

    </body>

</html>