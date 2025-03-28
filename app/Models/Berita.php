<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['judul', 'konten', 'gambar', 'created_at', 'updated_at'];
}
