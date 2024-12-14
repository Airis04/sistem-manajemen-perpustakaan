<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('pages.kategori.index', [
            'title' => 'Data Kategori',
            'kategori' => Kategori::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('pages.kategori.create', [
            'title' => 'Tambah kategori',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' => 'required',
        ]);

        Kategori::create($data);

        toast('Data kategori berhasil ditambahkan', 'success');

        return redirect()->route('dashboard.kategori.index');
    }

    public function edit(Kategori $kategori)
    {
        return view('pages.kategori.edit', [
            'title' => 'Edit kategori',
            'kategori' => $kategori,
        ]);
    }

    public function update(Request $request, Kategori $kategori)
    {
        $data = $request->validate([
            'nama_kategori' => 'required',
        ]);

        $kategori->update($data);

        toast('Data kategori berhasil diubah', 'success');

        return redirect()->route('dashboard.kategori.index');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        toast('Data kategori berhasil dihapus', 'success');

        return redirect()->route('dashboard.kategori.index');
    }
}
