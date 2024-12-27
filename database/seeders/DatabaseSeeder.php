<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Anggota;
use App\Models\Peminjaman;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

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
