<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = [
        'buku_id', 'member_id', 'tanggal_pinjam'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'member_id');
    }

    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class);
    }
}
