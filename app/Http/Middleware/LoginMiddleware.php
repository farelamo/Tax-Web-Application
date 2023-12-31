<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check())
            return redirect()->back();
        
        return $next($request);
    }
}
