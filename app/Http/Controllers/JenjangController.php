<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenjangController extends Controller
{
    public function detail($slug)
    {
        // Data Dummy (bisa diganti dengan database)
        $jenjangs = [
            'daycare' => [
                'title' => 'Daycare',
                'visi_misi' => 'Menyediakan lingkungan yang aman dan mendukung perkembangan anak usia dini.',
                'program' => ['Program Bermain', 'Asupan Gizi Seimbang', 'Pembelajaran Interaktif'],
                'brosur' => 'brosur-daycare.pdf'
            ],
            'playschool' => [
                'title' => 'Playschool',
                'visi_misi' => 'Membantu anak mengenal dunia sekolah dengan cara yang menyenangkan.',
                'program' => ['Belajar Sambil Bermain', 'Pengembangan Motorik', 'Interaksi Sosial'],
                'brosur' => 'brosur-playschool.pdf'
            ],
            'kindergarten' => [
                'title' => 'Kindergarten',
                'visi_misi' => 'Membentuk karakter dan persiapan masuk sekolah dasar.',
                'program' => ['Belajar Huruf & Angka', 'Kegiatan Kreatif', 'Pendidikan Karakter'],
                'brosur' => 'brosur-kindergarten.pdf'
            ],
            'sekolah-dasar' => [
                'title' => 'Sekolah Dasar',
                'visi_misi' => 'Memberikan pendidikan dasar yang kuat dalam akademik dan karakter.',
                'program' => ['Kurikulum Nasional', 'Ekskul Beragam', 'Pembelajaran Berbasis Teknologi'],
                'brosur' => 'brosur-sekolah-dasar.pdf'
            ],
            'kelas-terapi' => [
                'title' => 'Kelas Terapi',
                'visi_misi' => 'Mendukung anak-anak dengan kebutuhan khusus agar berkembang secara optimal.',
                'program' => ['Terapi Wicara', 'Terapi Motorik', 'Pendampingan Khusus'],
                'brosur' => 'brosur-kelas-terapi.pdf'
            ],
        ];

        // Cek apakah slug ada dalam daftar
        if (!isset($jenjangs[$slug])) {
            abort(404); // Jika tidak ditemukan, tampilkan halaman 404
        }

        $jenjang = $jenjangs[$slug];

        return view('jenjang.detail', compact('jenjang'));
    }
}
