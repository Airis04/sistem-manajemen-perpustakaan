<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return view('pages.anggota.index', [
            'title' => 'Data Anggota',
            'anggota' => Anggota::latest()->get(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Anggota $anggota)
    {
        //
    }

    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    public function destroy(Anggota $anggota)
    {
        //
    }
}
