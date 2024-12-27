<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuKategori extends Model
{
    use HasFactory;

    protected $table = 'buku_kategori';

    protected $guarded = ['id'];
}
