<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('pages.peminjaman.index', [
            'title' => 'Data Peminjaman',
            'peminjaman' => Peminjaman::with('buku', 'anggota')->latest()->get(),
        ]);
    }
}
