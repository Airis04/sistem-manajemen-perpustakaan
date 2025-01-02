<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.buku.index', [
            'title' => 'Data Buku',
            'buku' => Buku::with('penerbit')->latest()->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.pages.buku.create', [
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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_penerbit' => 'required|exists:penerbit,id',
            'tahun_terbit' => 'required|date_format:Y',
        ]);

        $data['gambar'] = $request->file('gambar')->store('images/books', 'public');
        Buku::create($data);

        toast('Data buku berhasil ditambahkan', 'success');

        return redirect()->route('dashboard.buku.index');
    }

    public function edit(Buku $buku)
    {
        return view('dashboard.pages.buku.edit', [
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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_penerbit' => 'required|exists:penerbits,id',
            'tahun_terbit' => 'required|date_format:Y',
        ]);

        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('images/books', 'public');
        }

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
