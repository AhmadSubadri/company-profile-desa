<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LayananPublik extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'layanan_publik';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'persyaratan',
        'prosedur',
        'formulir',
        'icon',
        'is_online'
    ];

    protected $casts = [
        'is_online' => 'boolean'
    ];

    // Relasi ke pengajuan surat
    public function pengajuanSurat()
    {
        return $this->hasMany(PengajuanSurat::class, 'layanan_id');
    }

    // Accessor untuk URL formulir
    public function getFormulirUrlAttribute()
    {
        return $this->formulir ? asset('storage/' . $this->formulir) : null;
    }
}
