<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\JenjangController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\OrangTuaController;

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jenjang/{slug}', [JenjangController::class, 'detail'])->name('jenjang.detail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb');
Route::post('/ppdb', [PPDBController::class, 'submit'])->name('ppdb.submit');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Rute Login
Auth::routes(); // Menyediakan rute login, register, dll.
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Middleware auth untuk akses setelah login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Dashboard sesuai role
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/guru/dashboard', [GuruController::class, 'dashboard'])->name('guru.dashboard');
    Route::get('/siswa/dashboard', [SiswaController::class, 'dashboard'])->name('siswa.dashboard');
    Route::get('/orangtua/dashboard', [OrangTuaController::class, 'dashboard'])->name('orangtua.dashboard');
});
