<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->role != 'PKP')
            return redirect()->back()->with('Maaf, Anda bukan PKP');

        return $next($request);
    }
}
