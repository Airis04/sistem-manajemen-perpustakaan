<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.dashboard.index', [
            'title' => 'Dashboard',
            'anggotaCount' => Anggota::count(),
            'bukuCount' => Buku::count(),
            'kategoriCount' => Kategori::count(),
            'peminjamanCount' => Peminjaman::count(),
            'topKategori' => $this->getTopKategori(),
            'peminjamanChart' => $this->getPeminjamanChart(),
            'pengembalianChart' => $this->getPengembalianChart(),
        ]);
    }

    private function getTopKategori()
    {
        return Kategori::withCount('buku')->orderBy('buku_count', 'desc')->limit(5)->get();
    }

    private function getPeminjamanChart()
    {
        $peminjamanCountPerMonth = DB::table('peminjaman')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->pluck('count', 'month')
            ->toArray();

        $result = array_fill(0, 12, 0);

        foreach ($peminjamanCountPerMonth as $month => $count) {
            $result[$month - 1] = $count;
        }

        return $result;

    }

    private function getPengembalianChart()
    {
        $pengembalianCountPerMonth = DB::table('pengembalian')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->pluck('count', 'month')
            ->toArray();

        $result = array_fill(0, 12, 0);

        foreach ($pengembalianCountPerMonth as $month => $count) {
            $result[$month - 1] = $count;
        }

        return $result;

    }
}
