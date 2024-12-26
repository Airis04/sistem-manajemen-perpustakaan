<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;

class AppBukuController extends Controller
{
    public function index()
    {
        return view('app.pages.books', [
            'title' => 'Beranda',
            'categories' => Kategori::latest()->get(),
            'books' => Buku::latest()->get(),
        ]);
    }

    // public function show(Buku $buku)
    // {
    //     return view('app.pages.book', [
    //         'title' => $buku->judul,
    //         'book' => $buku,
    //     ]);
    // }

    public function show(string $id)
    {
        return view('app.pages.book-detail', [
            'title' => 'Hao',
        ]);
    }
}
