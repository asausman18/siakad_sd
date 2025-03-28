<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        return view('ppdb');
    }

    public function submit(Request $request)
    {
        // Simpan data ke database nanti di langkah berikutnya
        return redirect()->route('ppdb')->with('success', 'Pendaftaran berhasil!');
    }
}
