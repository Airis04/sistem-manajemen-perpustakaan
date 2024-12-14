<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        return view('pages.pengembalian.index', [
            'title' => 'Data Pengembalian',
            'pengembalian' => Pengembalian::latest()->get(),
        ]);
    }
}
