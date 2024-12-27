<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peberbit_list = [
            'Yudhistira',
            'Erlangga',
            'Graha Ilmu',
            'Informatika',
            'Andi Offset',
            'Bumi Aksara',
            'Gramedia',
            'Mizan',
            'Republika',
            'Bentang Pustaka',
            'GagasMedia',
            'KPG',
            'Elex Media Komputindo',
            'Pustaka Al-Kautsar',
            'Pustaka Pelajar',
            'Pustaka Jaya',
            'Pustaka Obor',
            'Pustaka Sinar Harapan',
            'Pustaka Utama Grafiti',
            'Pustaka Zahra',
        ];

        foreach ($peberbit_list as $penerbit) {
            \App\Models\Penerbit::create([
                'nama_penerbit' => $penerbit,
            ]);
        }
    }
}
