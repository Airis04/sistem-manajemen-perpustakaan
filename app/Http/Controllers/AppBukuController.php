<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppBukuController extends Controller
{
    public function index()
    {
        return view('app.pages.books', [
            'title' => 'Beranda',
        ]);
    }

    public function show(Buku $buku)
    {
        return view('app.pages.book-detail', [
            'title' => $buku->judul_buku,
            'book' => $buku,
        ]);
    }

    public function borrow(Request $request, Buku $buku)
    {
        $request->validate([
            'tanggal_pinjam' => 'required|date|after:today',
            'tanggal_kembali' => 'required|date|after:tanggal_pinjam',
        ]);

        Peminjaman::create([
            'id_buku' => $buku->id,
            'id_anggota' => Auth::guard('anggota')->id(),
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);

        toast('Buku berhasil dipinjam', 'success');

        return redirect()->route('history');
    }
}
