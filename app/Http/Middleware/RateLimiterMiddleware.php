<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Cache\RateLimiter;

class RateLimiterMiddleware
{
    protected $limiter;

    public function __construct(RateLimiter $limiter){
        $this -> limiter = $limiter;
}

    public function handle(Request $request, Closure $next): Response
    {
        $key = $request->ip();

        if ($this->limiter->tooManyAttempts($key, 5))
            return new Response('Too many attempts.', 429);

            $this->limiter->hit($key, 60);
            return $next($request);
        }
    }
