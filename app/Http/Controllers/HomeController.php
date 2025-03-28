<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller; 
use Illuminate\Http\Request;
use App\Models\Berita;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('dashboard'); // Dashboard hanya bisa diakses setelah login
    }

    public function index()
    {
        // Data video profil masing-masing jenjang pendidikan
        $videos = [
            ['title' => 'Profil Daycare', 'url' => 'https://www.youtube.com/embed/UrMujSYR2-w'],
            ['title' => 'Profil Playschool', 'url' => 'https://www.youtube.com/embed/GCKV3_Z1-3c'],
            ['title' => 'Profil Kindergarten', 'url' => 'https://www.youtube.com/embed/XVtwyjbUPN0'],
            ['title' => 'Profil Sekolah Dasar', 'url' => 'https://www.youtube.com/embed/TiBf7VbLe-w'],
            ['title' => 'Profil Kelas Terapi', 'url' => 'https://www.youtube.com/embed/qk4U_ytTRUA'],
        ];

        // Data jenjang pendidikan (seharusnya diambil dari database)
        $jenjang = [
            ['id' => 1, 'nama' => 'Daycare', 'deskripsi' => 'Pendidikan usia dini', 'usia' => '1-3', 'fasilitas' => 'Ruang bermain, Makanan sehat'],
            ['id' => 2, 'nama' => 'Playschool', 'deskripsi' => 'Persiapan sekolah dasar', 'usia' => '3-5', 'fasilitas' => 'Kelas kreatif, Area bermain'],
            ['id' => 3, 'nama' => 'Kindergarten', 'deskripsi' => 'TK A dan TK B', 'usia' => '5-6', 'fasilitas' => 'Buku cerita, Ruang seni'],
            ['id' => 4, 'nama' => 'Sekolah Dasar', 'deskripsi' => 'Kelas 1-6 SD', 'usia' => '6-12', 'fasilitas' => 'Perpustakaan, Lab Komputer'],
            ['id' => 5, 'nama' => 'Inklusi', 'deskripsi' => 'Program khusus inklusif', 'usia' => '6-12', 'fasilitas' => 'Terapi, Bimbingan khusus'],
        ];

        $admins = [
            ['nama' => 'Admin 1', 'jabatan' => 'Kepala Sekolah', 'wa' => '628123456789'],
            ['nama' => 'Admin 2', 'jabatan' => 'Wakil Kepala', 'wa' => '628987654321'],
            ['nama' => 'Admin 3', 'jabatan' => 'Keuangan', 'wa' => '628987654321'],
        ];


        // Ambil 6 berita terbaru dari database
        $berita = Berita::latest()->take(6)->get();

        // Jika tidak ada berita di database, gunakan data berita statis
        if ($berita->isEmpty()) {
            $berita = [
                [
                    'judul' => 'Penerimaan Siswa Baru Telah Dibuka!',
                    'isi' => 'Sekolah kami membuka pendaftaran untuk jenjang Daycare, Playschool, Kindergarten, dan Sekolah Dasar.',
                    'gambar' => 'penerimaan-siswa.jpg',
                ],
                [
                    'judul' => 'Kegiatan Outdoor Learning di Sekolah Dasar',
                    'isi' => 'Siswa SD mengikuti kegiatan belajar di luar kelas untuk pengalaman edukatif yang menyenangkan.',
                    'gambar' => 'outdoor-learning.jpg',
                ],
                [
                    'judul' => 'Workshop Parenting untuk Orang Tua Murid',
                    'isi' => 'Kami mengadakan workshop parenting untuk membantu orang tua mendidik anak dengan metode terbaik.',
                    'gambar' => 'workshop-parenting.jpg',
                ],
            ];
        }

        // Kirim data ke view home.blade.php
        return view('home', compact('jenjang','videos', 'admins', 'berita'));
    }

    public function dashboard()
    {
        return view('dashboard'); 
    }
}
