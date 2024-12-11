<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'kelas'
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }
}
