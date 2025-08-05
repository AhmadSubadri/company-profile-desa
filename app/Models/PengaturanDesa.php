<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanDesa extends Model
{
    use HasFactory;

    protected $table = 'pengaturan_desa';

    protected $fillable = [
        'nama_desa',
        'kode_desa',
        'nama_kecamatan',
        'kode_kecamatan',
        'nama_kabupaten',
        'kode_kabupaten',
        'provinsi',
        'alamat_kantor',
        'telepon',
        'email',
        'logo',
        'website',
        'kepala_desa',
        'nip_kepala_desa',
        'visi',
        'misi',
        'sejarah',
        'geografis'
    ];

    // Accessor untuk URL logo
    public function getLogoUrlAttribute()
    {
        return $this->logo ? asset('storage/' . $this->logo) : null;
    }

    // Method untuk mendapatkan instance singleton
    public static function getSettings()
    {
        return static::firstOrCreate([], [
            'nama_desa' => 'Bero jaya timur',
            'nama_kecamatan' => 'Nama Kecamatan',
            'nama_kabupaten' => 'Nama Kabupaten',
            'provinsi' => 'Nama Provinsi'
        ]);
    }
}
