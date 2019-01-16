<?php

namespace MyApp\ReadingCircles\Application\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController
{
    /**
     * ログインフォームを表示
     */
    public function login()
    {
        return 'ログインフォーム';
    }

    /**
     * ログイン処理
     */
    public function auth(Request $requst)
    {

    }
}
