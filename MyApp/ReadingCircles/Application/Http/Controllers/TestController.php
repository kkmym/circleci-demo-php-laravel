<?php

namespace MyApp\ReadingCircles\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use MyApp\ReadingCircles\Application\UseCases\RCMemberLogin;

class TestController extends Controller
{
    public function index()
    {
        $loginUserCase = \App::make(RCMemberLogin::class);
        return 'Hello.';
    }
}
