<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $guarded = ['id'];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'buku_kategori', 'id_kategori', 'id_buku');
    }
}
