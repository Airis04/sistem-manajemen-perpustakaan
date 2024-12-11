<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Anggota extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
