<?php

namespace App\Http\Middleware;

use App\Http\Models\LiveMeeting;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class SiteAuthenticate
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role_id != 0) {
            return redirect('/login');
        }
        return $next($request);
    }
}
