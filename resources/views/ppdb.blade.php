@extends('layouts.app')

@section('title', 'PPDB')

@section('content')
<div class="container">
    <h2 class="text-center" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #2c3e50;">Pendaftaran Peserta Didik Baru (PPDB) 2025</h2>
    <p class="text-center">Silakan isi formulir di bawah untuk mendaftar sebagai siswa baru.</p>

    <div class="card p-4 shadow-sm">
        <form action="{{ route('ppdb.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Pilihan Jenjang Pendaftaran -->
            <div class="mb-3">
                <label class="form-label">Jenjang yang didaftarkan</label>
                <select class="form-control" name="jenjang" required>
                    <option value="">-- Pilih Jenjang --</option>
                    <option value="daycare">Daycare</option>
                    <option value="playschool">Playschool</option>
                    <option value="kindergarten">Kindergarten</option>
                    <option value="sekolah_dasar">Sekolah Dasar</option>
                    <option value="inklusi">Inklusi</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-control" name="jk" required>
                    <option value="">Laki-laki</option>
                    <option value="daycare">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text" name="hp" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required></textarea>
            </div>
            
            <!-- Upload Dokumen -->
            <div class="mb-3">
                <label class="form-label">Upload Kartu Keluarga</label>
                <input type="file" class="form-control" name="kk" accept=".pdf,.jpg,.png" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Akte Kelahiran</label>
                <input type="file" class="form-control" name="akte" accept=".pdf,.jpg,.png" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload KTP Orang Tua</label>
                <input type="file" class="form-control" name="ktp" accept=".pdf,.jpg,.png" required>
            </div>
            
            <button type="submit" class="btn btn-success w-100">Daftar Sekarang</button>
        </form>
    </div>
</div>
@endsection
