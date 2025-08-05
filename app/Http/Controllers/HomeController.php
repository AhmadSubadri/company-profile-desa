<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;

class HomeController extends Controller
{
    public function index()
    {
        $beritaTerbaru = Berita::latest()->take(3)->get();
        $galeri = Galeri::latest()->take(4)->get();

        return view('pages.home', [
            'namaDesa' => 'Bero jaya timur Anda',
            'namaKecamatan' => 'Nama Kecamatan',
            'namaKabupaten' => 'Nama Kabupaten',
            'jumlahPenduduk' => '5.000',
            'alamatDesa' => 'Jl. Raya Desa No. 1',
            'teleponDesa' => '0812-3456-7890',
            'emailDesa' => 'desa@email.com',
            'mapsEmbed' => 'https://maps.google.com/maps?q=-7.250445,112.768845&z=15&output=embed',
            'beritaTerbaru' => $beritaTerbaru,
            'galeri' => $galeri
        ]);
    }
}
