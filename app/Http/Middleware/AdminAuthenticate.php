<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role_id != 2) {
            return redirect('/login');
        }
        return $next($request);
    }
}
