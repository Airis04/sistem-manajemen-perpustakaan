<?php

namespace Database\Factories;

use App\Models\Pengembalian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tanggalPinjam = $this->faker->dateTimeBetween('-1 month', 'now');
        $tanggalKembali = (clone $tanggalPinjam)->modify('+'.rand(1, 7).' days');

        return [
            'id_anggota' => \App\Models\Anggota::inRandomOrder()->first()->id,
            'id_buku' => \App\Models\Buku::inRandomOrder()->first()->id,
            'tanggal_pinjam' => $tanggalPinjam->format('Y-m-d'),
            'tanggal_kembali' => $tanggalKembali->format('Y-m-d'),
            'is_kembali' => $this->faker->boolean(),
        ];
    }

    public function configure(): Factory
    {
        return $this->afterCreating(function (\App\Models\Peminjaman $peminjaman) {
            if ($peminjaman->is_kembali) {
                $pengembalian = Pengembalian::factory()->create([
                    'id_peminjaman' => $peminjaman->id,
                ]);

                $tanggalKembaliPeminjaman = new \DateTime($peminjaman->tanggal_kembali);
                $tanggalKembaliPengembalian = new \DateTime($pengembalian->tanggal_kembali);
                $selisihHari = $tanggalKembaliPeminjaman->diff($tanggalKembaliPengembalian)->days;

                if ($tanggalKembaliPengembalian > $tanggalKembaliPeminjaman) {
                    $denda = $selisihHari * 2000;
                    $pengembalian->update(['denda' => $denda]);
                }
            }
        });
    }
}
