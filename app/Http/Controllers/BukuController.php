<?php

namespace App\Http\Controllers;

use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        return view('pages.buku.index', [
            'title' => 'Data Buku',
            'buku' => Buku::latest()->get(),
        ]);
    }
}
