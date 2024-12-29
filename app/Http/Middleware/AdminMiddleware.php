<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $byPassCheck = false): Response
    {
        if ($byPassCheck){
            return $next($request);
        }

        if (Auth::check() || auth() -> Auth::user() -> is_admin != '1')
            dd('I don not have access to this page');
        else
        return $next($request);
    }

    public function terminate(Request $request, Response $response){

        Log::info('Middleware has ran successfully.');
    }
}
