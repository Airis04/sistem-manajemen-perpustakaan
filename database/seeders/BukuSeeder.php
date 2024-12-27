<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku_list = [
            [
                'judul_buku' => 'Belajar PHP & MySQL untuk Pemula',
                'penulis' => 'Khoerul Umam',
                'isbn' => '978-623-6480-00-0',
                'tahun_terbit' => 2021,
            ],
            [
                'judul_buku' => 'Mastering Laravel',
                'penulis' => 'Christopher John',
                'isbn' => '978-623-6480-01-7',
                'tahun_terbit' => 2020,
            ],
            [
                'judul_buku' => 'JavaScript: The Good Parts',
                'penulis' => 'Douglas Crockford',
                'isbn' => '978-623-6480-02-4',
                'tahun_terbit' => 2008,
            ],
            [
                'judul_buku' => 'Clean Code',
                'penulis' => 'Robert C. Martin',
                'isbn' => '978-623-6480-03-1',
                'tahun_terbit' => 2008,
            ],
            [
                'judul_buku' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
                'penulis' => 'Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides',
                'isbn' => '978-623-6480-04-8',
                'tahun_terbit' => 1994,
            ],
            [
                'judul_buku' => 'Refactoring: Improving the Design of Existing Code',
                'penulis' => 'Martin Fowler',
                'isbn' => '978-623-6480-05-5',
                'tahun_terbit' => 1999,
            ],
            [
                'judul_buku' => 'The Pragmatic Programmer',
                'penulis' => 'Andrew Hunt, David Thomas',
                'isbn' => '978-623-6480-06-2',
                'tahun_terbit' => 1999,
            ],
            [
                'judul_buku' => 'You Dont Know JS: Scope & Closures',
                'penulis' => 'Kyle Simpson',
                'isbn' => '978-623-6480-07-9',
                'tahun_terbit' => 2014,
            ],
            [
                'judul_buku' => 'Introduction to Algorithms',
                'penulis' => 'Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein',
                'isbn' => '978-623-6480-08-6',
                'tahun_terbit' => 2009,
            ],
            [
                'judul_buku' => 'Code Complete',
                'penulis' => 'Steve McConnell',
                'isbn' => '978-623-6480-09-3',
                'tahun_terbit' => 2004,
            ],
            [
                'judul_buku' => 'The Mythical Man-Month',
                'penulis' => 'Frederick P. Brooks Jr.',
                'isbn' => '978-623-6480-10-9',
                'tahun_terbit' => 1975,
            ],
            [
                'judul_buku' => 'The Art of Computer Programming',
                'penulis' => 'Donald E. Knuth',
                'isbn' => '978-623-6480-11-6',
                'tahun_terbit' => 1968,
            ],
            [
                'judul_buku' => 'Structure and Interpretation of Computer Programs',
                'penulis' => 'Harold Abelson, Gerald Jay Sussman',
                'isbn' => '978-623-6480-12-3',
                'tahun_terbit' => 1985,
            ],
            [
                'judul_buku' => 'The C Programming Language',
                'penulis' => 'Brian W. Kernighan, Dennis M. Ritchie',
                'isbn' => '978-623-6480-13-0',
                'tahun_terbit' => 1978,
            ],
            [
                'judul_buku' => 'Design Patterns in PHP and Laravel',
                'penulis' => 'Kelt Dockins',
                'isbn' => '978-623-6480-14-7',
                'tahun_terbit' => 2016,
            ],
            [
                'judul_buku' => 'PHP Objects, Patterns, and Practice',
                'penulis' => 'Mika Schwartz',
                'isbn' => '978-623-6480-15-4',
                'tahun_terbit' => 2016,
            ],
            [
                'judul_buku' => 'Laravel: Up & Running',
                'penulis' => 'Matt Stauffer',
                'isbn' => '978-623-6480-16-1',
                'tahun_terbit' => 2019,
            ],
            [
                'judul_buku' => 'Modern PHP: New Features and Good Practices',
                'penulis' => 'Josh Lockhart',
                'isbn' => '978-623-6480-17-8',
                'tahun_terbit' => 2015,
            ],
            [
                'judul_buku' => 'PHP Cookbook: Solutions & Examples for PHP Programmers',
                'penulis' => 'David Sklar, Adam Trachtenberg',
                'isbn' => '978-623-6480-18-5',
                'tahun_terbit' => 2014,
            ],
            [
                'judul_buku' => 'Learning PHP, MySQL & JavaScript: With jQuery, CSS & HTML5',
                'penulis' => 'Robin Nixon',
                'isbn' => '978-623-6480-19-2',
                'tahun_terbit' => 2018,
            ],
        ];

        foreach ($buku_list as $buku) {
            \App\Models\Buku::factory()->create([
                'judul_buku' => $buku['judul_buku'],
                'penulis' => $buku['penulis'],
                'isbn' => $buku['isbn'],
                'tahun_terbit' => $buku['tahun_terbit'],
            ]);
        }
    }
}
