<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warga extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'pendidikan',
        'pekerjaan',
        'status_perkawinan',
        'status_keluarga',
        'kewarganegaraan',
        'no_kk',
        'alamat',
        'rt',
        'rw',
        'dusun',
        'telepon',
        'email',
        'foto'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date'
    ];

    // Relasi ke pengajuan surat
    public function pengajuanSurat()
    {
        return $this->hasMany(PengajuanSurat::class);
    }

    // Relasi ke aparatur desa
    public function aparatur()
    {
        return $this->hasOne(AparaturDesa::class);
    }

    // Accessor untuk URL foto
    public function getFotoUrlAttribute()
    {
        return $this->foto ? asset('storage/' . $this->foto) : asset('assets/images/default-avatar.png');
    }

    // Scope untuk pencarian
    public function scopeSearch($query, $search)
    {
        return $query->where('nama_lengkap', 'like', "%$search%")
            ->orWhere('nik', 'like', "%$search%");
    }
}
