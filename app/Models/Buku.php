<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'judul_buku',
        'penulis',
        'isbn',
        'id_penerbit',
        'tahun_terbit',
    ];

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'buku_kategori');
    }
}
