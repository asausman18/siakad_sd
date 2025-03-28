<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Redirect berdasarkan role
            switch ($user->role) {
                case 'admin':
                    return redirect('/admin/dashboard');
                case 'guru':
                    return redirect('/guru/dashboard');
                case 'siswa':
                    return redirect('/siswa/dashboard');
                case 'orangtua':
                    return redirect('/orangtua/dashboard');
                default:
                    return redirect('/home');
            }
        }

        return $next($request);
    }
}
