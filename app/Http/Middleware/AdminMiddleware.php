<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check() && Admin::find(Auth::guard('admin')->id())->isAdmin()) {
            return $next($request);
        }

        return redirect('/')->with('error', 'Access denied.');
    }
}
