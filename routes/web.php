<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Models\Anggota;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'store']);

Route::resource('anggota', AnggotaController::class);

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');

Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');

Route::get('/landing', function () {
    return view('landing.index');
});
Route::get('/landing', [LandingController::class, 'index'])->name('landing.index');
