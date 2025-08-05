<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'slug',
        'ringkasan',
        'konten',
        'gambar',
        'penulis',
        'kategori',
        'is_published',
        'views'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    // Scope untuk berita yang dipublikasikan
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope untuk berita populer
    public function scopePopular($query, $limit = 5)
    {
        return $query->orderBy('views', 'desc')->take($limit);
    }
}
