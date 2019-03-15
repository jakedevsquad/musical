<?php

namespace App\Http\Middleware;

use App\UserRole;
use Closure;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->role != UserRole::ADMIN) {
            return redirect('home');
        }
        return $next($request);
    }
}
