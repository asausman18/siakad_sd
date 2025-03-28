<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        $user = Auth::user();

        if ($user->role == 'admin') {
            return '/admin/dashboard';
        } elseif ($user->role == 'guru') {
            return '/guru/dashboard';
        } elseif ($user->role == 'siswa') {
            return '/siswa/dashboard';
        } elseif ($user->role == 'orangtua') {
            return '/orangtua/dashboard';
        }

        return '/home'; // Jika role tidak ditemukan, arahkan ke halaman default
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
