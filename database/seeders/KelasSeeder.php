<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan_list = [
            'IPA',
            'IPS',
        ];
        $tingkat_list = [
            'X',
            'XI',
            'XII',
        ];

        foreach ($jurusan_list as $jurusan) {
            foreach ($tingkat_list as $tingkat) {
                for ($i = 1; $i <= 6; $i++) {
                    $kelas = $tingkat.' '.$jurusan.' '.' '.$i;
                    \App\Models\Kelas::create([
                        'kelas' => $kelas,
                    ]);
                }
            }
        }
    }
}
