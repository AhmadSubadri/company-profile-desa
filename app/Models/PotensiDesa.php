<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PotensiDesa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'potensi_desa';

    protected $fillable = [
        'nama',
        'slug',
        'kategori',
        'deskripsi',
        'lokasi',
        'pemilik',
        'kontak',
        'foto_utama',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    // Relasi ke gambar potensi
    public function gambarPotensi()
    {
        return $this->hasMany(GambarPotensi::class, 'potensi_id');
    }

    // Accessor untuk URL foto utama
    public function getFotoUtamaUrlAttribute()
    {
        return asset('storage/' . $this->foto_utama);
    }

    // Scope untuk potensi aktif
    public function scopeAktif($query)
    {
        return $query->where('is_active', true);
    }

    // Scope berdasarkan kategori
    public function scopeKategori($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }
}
