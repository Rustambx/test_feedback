<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $generatedToken = 'gaCSc0IKz3b0KLGvMzxjqD7izjRWBfsFkOLmxgBrS7MssD2j7RUqdUTAA25HcrY9';

        $token = $request->header('Authorization');

        // Проверяем статический токен
        if ($token !== $generatedToken) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
