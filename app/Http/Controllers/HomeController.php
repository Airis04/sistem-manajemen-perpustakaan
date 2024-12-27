<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('app.pages.home', [
            'title' => 'Beranda',
            'books' => Buku::latest()->limit(4)->get(),
        ]);
    }

    public function contact()
    {
        return view('app.pages.contact', [
            'title' => 'Kontak',
        ]);
    }

    public function history()
    {
        /**
         * @var \App\Models\Anggota $user
         */
        $user = Auth::user();

        return view('app.pages.history', [
            'title' => 'Riwayat Peminjaman',
            'bookings' => $user->peminjaman()->latest()->get(),
        ]);
    }
}
