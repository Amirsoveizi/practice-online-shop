<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthLogger
{
    public function handle(Request $request, Closure $next): Response
    {               
        $next($request);

        if (Auth::check()) {
            $user = Auth::user();
            $url = $request->method() . ' ' . $request->path();            
            $body = $request->all();
            $user->log($url, json_encode($body));
        }

        return $next($request);
    }
}
