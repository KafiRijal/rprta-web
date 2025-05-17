<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next, $roles)
    {
        $user = Auth::user();

        $rolesArray = explode(',', $roles);

        if (!$user || !in_array($user->role_id, $rolesArray)) {
            return redirect()->route('notFound')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request);
    }
}
