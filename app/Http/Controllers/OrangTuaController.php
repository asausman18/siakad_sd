<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrangTuaController extends Controller
{
    public function dashboard()
{
    return view('orangtua.dashboard');
}

}
