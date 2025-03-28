<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            [
                'judul' => 'Penerimaan Siswa Baru Telah Dibuka!',
                'isi' => 'Sekolah kami membuka pendaftaran untuk jenjang Daycare, Playschool, Kindergarten, dan Sekolah Dasar.',
                'gambar' => 'berita1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Kegiatan Outdoor Learning di Sekolah Dasar',
                'isi' => 'Siswa SD mengikuti kegiatan belajar di luar kelas untuk pengalaman edukatif yang menyenangkan.',
                'gambar' => 'berita2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Workshop Parenting untuk Orang Tua Murid',
                'isi' => 'Kami mengadakan workshop parenting untuk membantu orang tua mendidik anak dengan metode terbaik.',
                'gambar' => 'berita3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
