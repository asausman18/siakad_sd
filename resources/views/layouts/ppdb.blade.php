@extends('layouts.app')

@section('title', 'PPDB')

@section('content')
    <h1>Pendaftaran Siswa Baru (PPDB)</h1>
    <p>Silakan isi formulir di bawah ini untuk mendaftar sebagai siswa baru.</p>

    <form action="#" method="POST">
        @csrf
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email Orang Tua:</label>
        <input type="email" id="email" name="email" required>

        <label for="kelas">Kelas Tujuan:</label>
        <select id="kelas" name="kelas" required>
            <option value="1">Kelas 1</option>
            <option value="2">Kelas 2</option>
            <option value="3">Kelas 3</option>
            <option value="4">Kelas 4</option>
            <option value="5">Kelas 5</option>
            <option value="6">Kelas 6</option>
        </select>

        <button type="submit">Daftar</button>
    </form>
@endsection
