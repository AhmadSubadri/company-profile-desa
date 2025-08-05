<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengajuanSurat extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pengajuan_surat';

    protected $fillable = [
        'layanan_id',
        'warga_id',
        'nomor_pengajuan',
        'data_pengajuan',
        'status',
        'catatan',
        'surat'
    ];

    protected $casts = [
        'data_pengajuan' => 'array'
    ];

    // Relasi ke layanan publik
    public function layanan()
    {
        return $this->belongsTo(LayananPublik::class, 'layanan_id');
    }

    // Relasi ke warga
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'warga_id');
    }

    // Accessor untuk URL surat
    public function getSuratUrlAttribute()
    {
        return $this->surat ? asset('storage/' . $this->surat) : null;
    }

    // Scope berdasarkan status
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
