<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Anggota;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'nama' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        Anggota::factory()->create([
            'nis' => '1234567890',
            'nama' => 'Arfan Pria Pamungkas',
            'email' => 'user@user.com',
            'password' => 'password',
            'no_telpon' => '081234567890',
            'alamat' => 'Jl. Jalan No. 123',
        ]);
    }
}
