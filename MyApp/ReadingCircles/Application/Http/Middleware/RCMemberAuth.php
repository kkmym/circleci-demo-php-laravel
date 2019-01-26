<?php

namespace MyApp\ReadingCircles\Application\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class RCMemberAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::guard('rcmember')->check() == false) {
            return redirect('/?login=false');
        }
        return $next($request);
    }
}