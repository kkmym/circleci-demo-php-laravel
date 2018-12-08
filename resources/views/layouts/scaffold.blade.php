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
                    Logged in as {{{ Auth::user()->email }}}.
                    <a href="javascript:void(0)" onclick="document.frmLogout.submit();return false;">Logout</a>
                    <form action="/logout" method="post" name="frmLogout" style="display: none"></form>
                @else
                    Not logged in
                @endif
            </div>
        </div>

    </body>

</html>