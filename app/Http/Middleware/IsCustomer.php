<?php

namespace App\Http\Middleware;

use App\UserRole;
use Closure;

class IsCustomer
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->role != UserRole::CUSTOMER) {
            return redirect('home');
        }
        return $next($request);
    }
}
