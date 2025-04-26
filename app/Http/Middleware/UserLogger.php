<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserLogger
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            $url = $request->method() . ' ' . $request->path();            
            $body = $request->all();
            $user->log($url, json_encode($body));
        }

        return $next($request);
    }
}
