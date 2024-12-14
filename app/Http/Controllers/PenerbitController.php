<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        return view('pages.penerbit.index', [
            'title' => 'Data Penerbit',
            'penerbit' => Penerbit::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('pages.penerbit.create', [
            'title' => 'Tambah Penerbit',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_penerbit' => 'required',
        ]);

        Penerbit::create($data);

        toast('Data penerbit berhasil ditambahkan', 'success');

        return redirect()->route('dashboard.penerbit.index');
    }

    public function edit(Penerbit $penerbit)
    {
        return view('pages.penerbit.edit', [
            'title' => 'Edit Penerbit',
            'penerbit' => $penerbit,
        ]);
    }

    public function update(Request $request, Penerbit $penerbit)
    {
        $data = $request->validate([
            'nama_penerbit' => 'required',
        ]);

        $penerbit->update($data);

        toast('Data penerbit berhasil diubah', 'success');

        return redirect()->route('dashboard.penerbit.index');
    }

    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();

        toast('Data penerbit berhasil dihapus', 'success');

        return redirect()->route('dashboard.penerbit.index');
    }
}
