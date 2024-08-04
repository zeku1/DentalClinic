<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isBehindProxy = env('APP_BEHIND_PROXY', false);

        if (!$request->secure() && (!$isBehindProxy || $request->header('X-Forwarded-Proto') !== 'https')) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
