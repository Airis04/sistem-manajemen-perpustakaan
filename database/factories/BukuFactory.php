<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul_buku' => $this->faker->sentence(3),
            'penulis' => $this->faker->name(),
            'gambar' => 'images/books/'.$this->faker->file('storage/app/seeder/books', 'public/storage/images/books', false),
            'isbn' => $this->faker->unique()->isbn13(),
            'deskripsi' => $this->faker->optional()->paragraph(),
            'id_penerbit' => \App\Models\Penerbit::inRandomOrder()->first()->id,
            'tahun_terbit' => $this->faker->year(),
        ];
    }
}
