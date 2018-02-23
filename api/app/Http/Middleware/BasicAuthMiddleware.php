<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class BasicAuthMiddleware
 *
 * @package App\Http\Middleware
 */
class BasicAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->getUser() != 'basic' || $request->getPassword() != 'auth') {
            return response(
                'Access denied',
                401,
                [
                    'WWW-Authenticate' => 'Basic',
                ]
            );
        }

        return $next($request);
    }
}