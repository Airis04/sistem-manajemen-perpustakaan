<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.peminjaman.index', [
            'title' => 'Data Peminjaman',
            'peminjaman' => Peminjaman::with('buku', 'anggota')->latest()->get(),
        ]);
    }

    public function show(Peminjaman $peminjaman)
    {
        return view('dashboard.pages.peminjaman.show', [
            'title' => 'Detail Peminjaman',
            'peminjaman' => $peminjaman,
        ]);
    }

    public function return(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'tanggal_kembali' => 'required|after:today',
        ]);

        $denda = null;

        if (strtotime($request->tanggal_kembali) > strtotime($peminjaman->tanggal_kembali)) {
            $denda = (strtotime($request->tanggal_kembali) - strtotime($peminjaman->tanggal_kembali)) / (60 * 60 * 24) * 2000;
        }

        Pengembalian::create([
            'id_peminjaman' => $peminjaman->id,
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda' => $denda,
        ]);

        toast('Buku berhasil dikembalikan', 'success');

        return redirect()->route('dashboard.peminjaman.index');
    }
}
