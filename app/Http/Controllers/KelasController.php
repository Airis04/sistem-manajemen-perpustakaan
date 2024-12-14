<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('pages.kelas.index', [
            'title' => 'Data Kelas',
            'kelas' => Kelas::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('pages.kelas.create', [
            'title' => 'Tambah Kelas',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kelas' => 'required',
        ]);

        Kelas::create($data);

        toast('Data kelas berhasil ditambahkan', 'success');

        return redirect()->route('dashboard.kelas.index');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);

        return view('pages.kelas.edit', [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $data = $request->validate([
            'kelas' => 'required',
        ]);

        $kelas->update($data);

        toast('Data kelas berhasil diubah', 'success');

        return redirect()->route('dashboard.kelas.index');
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        toast('Data kelas berhasil dihapus', 'success');

        return redirect()->route('dashboard.kelas.index');
    }
}
