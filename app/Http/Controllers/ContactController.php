<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $admins = [
            [
                'nama' => 'Budi Santoso',
                'jabatan' => 'Admin PPDB',
                'whatsapp' => '6281234567890',
                'email' => 'budi@example.com',
            ],
            [
                'nama' => 'Siti Aisyah',
                'jabatan' => 'Admin Akademik',
                'whatsapp' => '6289876543210',
                'email' => 'siti@example.com',
            ],
            [
                'nama' => 'Rudi Hartono',
                'jabatan' => 'Admin Keuangan',
                'whatsapp' => '6282233445566',
                'email' => 'rudi@example.com',
            ],
        ];

        return view('contact', compact('admins'));
    }
}
