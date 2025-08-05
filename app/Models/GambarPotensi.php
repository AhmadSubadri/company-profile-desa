<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarPotensi extends Model
{
    use HasFactory;

    protected $table = 'gambar_potensi';

    protected $fillable = [
        'potensi_id',
        'gambar',
        'keterangan',
        'urutan'
    ];

    // Relasi ke potensi desa
    public function potensi()
    {
        return $this->belongsTo(PotensiDesa::class, 'potensi_id');
    }

    // Accessor untuk URL gambar
    public function getGambarUrlAttribute()
    {
        return asset('storage/' . $this->gambar);
    }
}
