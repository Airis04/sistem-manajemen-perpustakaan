<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori_list = [
            'Agama',
            'Filsafat',
            'Sosial',
            'Teknologi',
            'Seni',
            'Sastra',
            'Sejarah',
            'Geografi',
            'Matematika',
            'Ilmu Pengetahuan Alam',
            'Ilmu Pengetahuan Sosial',
            'Ilmu Pengetahuan Terapan',
            'Ilmu Pengetahuan Budaya',
            'Ilmu Pengetahuan Lingkungan',
            'Ilmu Pengetahuan Kesehatan',
            'Ilmu Pengetahuan dan Teknologi',
            'Ilmu Pengetahuan dan Seni',
            'Ilmu Pengetahuan dan Agama',
            'Ilmu Pengetahuan dan Filsafat',
            'Ilmu Pengetahuan dan Sejarah',
        ];

        foreach ($kategori_list as $kategori) {
            \App\Models\Kategori::create([
                'nama_kategori' => $kategori,
            ]);
        }
    }
}
