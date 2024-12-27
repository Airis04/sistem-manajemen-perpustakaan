<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Anggota;
use App\Models\Peminjaman;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (! File::exists(storage_path('/app/public/images/books'))) {
            File::makeDirectory(storage_path('/app/public/images/books'), 0755, true);
        }

        if (File::exists(storage_path('/app/public/images/books'))) {
            $asset = storage_path('/app/public/images/books');
            foreach (File::files($asset) as $file) {
                File::delete($file);
            }
        }

        Admin::factory(3)->create();

        $this->call([
            KelasSeeder::class,
        ]);

        Anggota::factory(45)->create();

        $this->call([
            AccountSeeder::class,
            PenerbitSeeder::class,
            KategoriSeeder::class,
            BukuSeeder::class,
            BukuKategoriSeeder::class,
        ]);

        Peminjaman::factory(50)->create();
    }
}
