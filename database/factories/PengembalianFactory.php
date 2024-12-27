<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengembalian>
 */
class PengembalianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_peminjaman' => \App\Models\Peminjaman::inRandomOrder()->first()->id,
            'tanggal_kembali' => $this->faker->date(),
            'denda' => $this->faker->optional()->numberBetween(1000, 10000),
        ];
    }
}
