<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        return view('app.pages.home', [
            'title' => 'Beranda',
            'categories' => Kategori::latest()->get(),
        ]);
    }

    public function contact()
    {
        return view('app.pages.contact', [
            'title' => 'Kontak',
            'categories' => Kategori::latest()->get(),
        ]);
    }
}
