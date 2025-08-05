<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AparaturDesa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'aparatur_desa';

    protected $fillable = [
        'warga_id',
        'nama',
        'jabatan',
        'foto',
        'tugas',
        'pendidikan',
        'mulai_jabatan',
        'akhir_jabatan',
        'is_active',
        'urutan'
    ];

    protected $casts = [
        'mulai_jabatan' => 'date',
        'akhir_jabatan' => 'date',
        'is_active' => 'boolean'
    ];

    // Relasi ke warga
    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }

    // Accessor untuk URL foto
    public function getFotoUrlAttribute()
    {
        return $this->foto ? asset('storage/' . $this->foto) : asset('assets/images/default-avatar.png');
    }

    // Scope untuk aparatur aktif
    public function scopeAktif($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk urutan
    public function scopeUrutan($query)
    {
        return $query->orderBy('urutan');
    }
}
