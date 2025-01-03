<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AppBukuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenerbitController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::middleware('auth:admin,anggota')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth:anggota')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');
    Route::get('/riwayat', [HomeController::class, 'history'])->name('history');

    Route::get('/buku', [AppBukuController::class, 'index'])->name('buku.index');
    Route::get('/buku/{buku}', [AppBukuController::class, 'show'])->name('buku.show');
    Route::post('/buku/{buku}/borrow', [AppBukuController::class, 'borrow'])->name('buku.borrow');
});

Route::as('dashboard.')->prefix('dashboard')->middleware('auth:admin')->group(function () {

    Route::get('/index', [DashboardController::class, 'index'])->name('index');

    Route::resource('/penerbit', PenerbitController::class)->except('show');

    Route::resource('/anggota', AnggotaController::class)->except('show');

    Route::resource('/kategori', KategoriController::class)->except('show');

    Route::resource('/kelas', KelasController::class)->except('show');

    Route::resource('/buku', BukuController::class);

    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('/peminjaman/{peminjaman}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
    Route::post('/peminjaman/{peminjaman}/return', [PeminjamanController::class, 'return'])->name('peminjaman.return');
});
