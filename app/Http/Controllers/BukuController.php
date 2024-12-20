<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('pages.buku.index', [
            'title' => 'Data Buku',
            'buku' => Buku::with('penerbit')->latest()->get(),
        ]);
    }

    public function create()
    {
        return view('pages.buku.create', [
            'title' => 'Tambah Buku',
            'penerbits' => Penerbit::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'isbn' => 'required|max:13',
            'id_penerbit' => 'required|exists:penerbits,id',
            'tahun_terbit' => 'required|date_format:Y',
        ]);

        Buku::create($data);

        toast('Data buku berhasil ditambahkan', 'success');

        return redirect()->route('dashboard.buku.index');
    }

    public function edit(Buku $buku)
    {
        return view('pages.buku.edit', [
            'title' => 'Edit Buku',
            'buku' => $buku,
            'penerbits' => Penerbit::latest()->get(),
        ]);
    }

    public function update(Request $request, Buku $buku)
    {
        $data = $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'isbn' => 'required|max:13',
            'id_penerbit' => 'required|exists:penerbits,id',
            'tahun_terbit' => 'required|date_format:Y',
        ]);

        $buku->update($data);

        toast('Data buku berhasil diubah', 'success');

        return redirect()->route('dashboard.buku.index');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        toast('Data buku berhasil dihapus', 'success');

        return redirect()->route('dashboard.buku.index');
    }
}
