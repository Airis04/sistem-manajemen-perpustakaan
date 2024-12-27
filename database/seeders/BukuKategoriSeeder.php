<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku_list = Buku::all();

        foreach ($buku_list as $buku) {
            for ($i = 1; $i <= rand(1, 5); $i++) {
                $buku->kategori()->attach(rand(1, 20));
            }
        }
    }
}
