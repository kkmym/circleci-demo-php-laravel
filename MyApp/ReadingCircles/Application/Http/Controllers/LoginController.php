<?php

namespace MyApp\ReadingCircles\Application\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MyApp\ReadingCircles\Application\UseCases\RCMemberLogin;

class LoginController
{
    protected $memberLogin;

    public function __construct(RCMemberLogin $memberLogin)
    {
        $this->memberLogin = $memberLogin;
    }

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
        // 最低限のValidate
        

    }
}
