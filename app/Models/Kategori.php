<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama'
    ];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'buku_kategori');
    }
}
