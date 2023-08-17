<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check())
            return redirect()->route('login')->with('Silahkan login dahulu');

        return $next($request);
    }
}
