<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'isbn',
        'penerbit',
        'tahun_terbit',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'buku_kategori');
    }
}
