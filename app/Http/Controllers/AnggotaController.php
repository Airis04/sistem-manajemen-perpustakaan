<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kelas;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.anggota.index', [
            'title' => 'Data Anggota',
            'anggota' => Anggota::with('kelas')->latest()->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.pages.anggota.create', [
            'title' => 'Tambah Anggota',
            'kelas' => Kelas::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_kelas' => 'nullable|exists:kelas,id',
            'nis' => 'required|digits:10|unique:anggota,nis',
            'nama' => 'required|string',
            'email' => 'required|email|unique:anggota,email',
            'password' => 'required|string|min:8',
            'no_telpon' => 'required|string|max:20',
            'alamat' => 'required|string',
        ]);

        Anggota::create($data);

        toast('Anggota berhasil ditambahkan', 'success');

        return redirect()->route('dashboard.anggota.index');
    }

    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);

        return view('dashboard.pages.anggota.edit', [
            'title' => 'Edit Anggota',
            'anggota' => $anggota,
            'kelas' => Kelas::latest()->get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);
        $data = $request->validate([
            'id_kelas' => 'nullable|exists:kelas,id',
            'nis' => 'required|digits:10|unique:anggota,nis,' . $anggota->id,
            'nama' => 'required|string',
            'email' => 'required|email|unique:anggota,email,' . $anggota->id,
            'password' => 'nullable|string|min:8',
            'no_telpon' => 'required|string|max:20',
            'alamat' => 'required|string',
        ]);

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        $anggota->update($data);

        toast('Anggota berhasil diubah', 'success');

        return redirect()->route('dashboard.anggota.index');
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        toast('Anggota berhasil dihapus', 'success');

        return redirect()->route('dashboard.anggota.index');
    }
}
