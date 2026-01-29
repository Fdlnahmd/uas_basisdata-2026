<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RumahSakit extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_rs',
        'nama_rs',
        'alamat',
        'kota',
        'provinsi',
        'telepon',
        'email',
        'status',
        'tipe_rs',
    ];

    // Relasi: Rumah Sakit has many Poliklinik
    public function polikliniks(): HasMany
    {
        return $this->hasMany(Poliklinik::class);
    }
}