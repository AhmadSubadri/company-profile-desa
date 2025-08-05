<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'galeri';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'kategori',
        'tanggal'
    ];

    protected $casts = [
        'tanggal' => 'date'
    ];

    // Accessor untuk URL gambar lengkap
    public function getGambarUrlAttribute()
    {
        return asset('storage/' . $this->gambar);
    }

    // Scope untuk galeri berdasarkan kategori
    public function scopeKategori($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }
}
