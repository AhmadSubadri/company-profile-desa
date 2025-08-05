@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section id="beranda" class="relative bg-green-700 text-white">
    <div class="block md:hidden">
        <img src="{{ asset('assets/images/hero-mobile.jpg') }}" alt="Foto Desa" class="w-full h-48 object-cover opacity-60">
    </div>
    <div class="hidden md:block">
        <img src="{{ asset('assets/images/hero-desktop.jpg') }}" alt="Foto Desa" class="w-full h-72 object-cover opacity-60">
    </div>
    <div class="relative md:absolute md:inset-0 flex flex-col items-center justify-center text-center px-4 py-8 md:py-0">
        <h2 class="text-2xl md:text-4xl font-bold mb-2">Selamat datang di Website Resmi Desa {{ $namaDesa ?? 'Bero jaya timur' }}</h2>
        <p class="text-gray-200 mb-4 text-base">Informasi, layanan, dan berita terkini seputar Desa {{ $namaDesa ?? 'Bero jaya timur' }}.</p>
        <p class="mb-4 text-base md:text-lg">Kecamatan {{ $namaKecamatan ?? 'X' }}, Kabupaten {{ $namaKabupaten ?? 'Y' }}. Bersama membangun desa yang mandiri dan sejahtera.</p>
        <div class="flex flex-col gap-2 w-full max-w-xs mx-auto md:flex-row md:gap-3 md:max-w-none md:w-auto md:mx-0">
            <a href="{{ route('profil') }}" class="bg-white text-green-700 px-5 py-2 rounded font-semibold shadow hover:bg-green-100">Lihat Profil Desa</a>
            <a href="#layanan" class="bg-green-500 text-white px-5 py-2 rounded font-semibold shadow hover:bg-green-600">Ajukan Surat Online</a>
        </div>
    </div>
</section>

<!-- Tentang Desa -->
<section id="profil" class="container mx-auto py-12 px-4">
    <div class="md:flex md:items-center md:gap-8">
        <!-- <img src="{{ asset('assets/images/peta-desa.jpg') }}" alt="Peta Desa" class="rounded-lg shadow mb-6 md:mb-0 w-full md:w-auto"> -->
        <div>
            <h3 class="text-2xl font-bold mb-2">Tentang Desa</h3>
            <p class="mb-2">Desa {{ $namaDesa ?? 'Bero jaya timur' }} terletak di Kecamatan {{ $namaKecamatan ?? 'X' }}, Kabupaten {{ $namaKabupaten ?? 'Y' }}. Memiliki jumlah penduduk sekitar {{ $jumlahPenduduk ?? 'xxxx' }} jiwa. Potensi ekonomi desa meliputi pertanian, UMKM, dan pariwisata budaya yang berkembang.</p>
            <a href="{{ route('profil') }}" class="text-green-700 font-semibold hover:underline">Lihat Selengkapnya</a>
        </div>
    </div>
</section>

<!-- Layanan Unggulan -->
<section id="layanan" class="bg-white py-12">
    <div class="container mx-auto px-4">
        <h3 class="text-2xl font-bold text-center mb-2">Layanan Unggulan</h3>
        <p class="text-gray-500 mb-8 text-center text-base">Nikmati kemudahan layanan publik dan informasi unggulan dari Desa {{ $namaDesa ?? 'Bero jaya timur' }}.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <a href="#" class="flex flex-col items-center p-4 bg-gray-50 rounded shadow hover:bg-green-50">
                <span class="text-3xl mb-2">📝</span>
                <span class="font-semibold">Pengajuan Surat</span>
            </a>
            <a href="#" class="flex flex-col items-center p-4 bg-gray-50 rounded shadow hover:bg-green-50">
                <span class="text-3xl mb-2">📊</span>
                <span class="font-semibold">Data Kependudukan</span>
            </a>
            <a href="#" class="flex flex-col items-center p-4 bg-gray-50 rounded shadow hover:bg-green-50">
                <span class="text-3xl mb-2">📅</span>
                <span class="font-semibold">Jadwal Posyandu</span>
            </a>
            <a href="#" class="flex flex-col items-center p-4 bg-gray-50 rounded shadow hover:bg-green-50">
                <span class="text-3xl mb-2">📁</span>
                <span class="font-semibold">Arsip Perdes</span>
            </a>
        </div>
    </div>
</section>

<!-- Berita & Pengumuman Terbaru -->
<section id="berita" class="container mx-auto py-12 px-4">
    <h3 class="text-2xl font-bold mb-2 text-center">Berita & Pengumuman Terbaru</h3>
    <p class="text-gray-500 mb-8 text-center text-base">Update berita, pengumuman, dan informasi penting untuk warga desa.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($beritaTerbaru as $berita)
        <div class="bg-white rounded shadow p-4">
            <h4 class="font-semibold mb-1">{{ $berita->judul }}</h4>
            <span class="text-xs text-gray-400">{{ $berita->created_at->format('d M Y') }}</span>
            <p class="mt-2 text-sm">{{ Str::limit($berita->ringkasan, 100) }}</p>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-6">
        <a href="{{ route('berita') }}" class="text-green-700 font-semibold hover:underline">Lihat Semua Berita</a>
    </div>
</section>

<!-- Potensi Desa / Highlight -->
<section class="bg-green-50 py-12">
    <div class="container mx-auto px-4">
        <h3 class="text-2xl font-bold text-center mb-2">Potensi Desa</h3>
        <p class="text-gray-500 mb-8 text-center text-base">Berbagai potensi ekonomi, wisata, dan budaya yang dimiliki Desa {{ $namaDesa ?? 'Bero jaya timur' }}.</p>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded shadow p-4 flex flex-col items-center">
                <span class="text-3xl mb-2">🌾</span>
                <h4 class="font-semibold mb-1">UMKM & Produk Unggulan</h4>
                <p class="text-sm text-center">Produk lokal berkualitas dari warga desa.</p>
                <a href="#" class="text-green-700 font-semibold hover:underline mt-2">Detail</a>
            </div>
            <div class="bg-white rounded shadow p-4 flex flex-col items-center">
                <span class="text-3xl mb-2">🏞️</span>
                <h4 class="font-semibold mb-1">Wisata Alam / Budaya</h4>
                <p class="text-sm text-center">Keindahan alam dan tradisi budaya desa.</p>
                <a href="#" class="text-green-700 font-semibold hover:underline mt-2">Detail</a>
            </div>
            <div class="bg-white rounded shadow p-4 flex flex-col items-center">
                <span class="text-3xl mb-2">🎉</span>
                <h4 class="font-semibold mb-1">Kegiatan Masyarakat</h4>
                <p class="text-sm text-center">Berbagai kegiatan sosial dan budaya warga.</p>
                <a href="#" class="text-green-700 font-semibold hover:underline mt-2">Detail</a>
            </div>
        </div>
    </div>
</section>

<!-- Galeri Foto / Video -->
<section id="galeri" class="container mx-auto py-12 px-4">
    <h3 class="text-2xl font-bold mb-2 text-center">Galeri Desa</h3>
    <p class="text-gray-500 mb-8 text-center text-base">Dokumentasi foto dan video kegiatan serta keindahan desa.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        @foreach($galeri as $item)
        <div class="aspect-[4/3] bg-gray-200 rounded shadow overflow-hidden">
            <!-- <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="object-cover w-full h-full"> -->
        </div>
        @endforeach
    </div>
    <div class="text-center">
        <a href="{{ route('galeri') }}" class="text-green-700 font-semibold hover:underline">Lihat Galeri</a>
    </div>
</section>

<!-- Kontak & Lokasi -->
<section id="kontak" class="bg-white py-12">
    <div class="container mx-auto px-4 md:flex md:space-x-8">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h3 class="text-2xl font-bold mb-2">Kontak Desa</h3>
            <p class="text-gray-500 mb-4 text-base">Hubungi kami untuk informasi, layanan, atau keperluan administrasi desa.</p>
            <p class="mb-1">Alamat: {{ $alamatDesa ?? 'Jl. Raya Desa No. 1' }}, Kecamatan {{ $namaKecamatan ?? 'X' }}, Kabupaten {{ $namaKabupaten ?? 'Y' }}</p>
            <p class="mb-1">Telepon: {{ $teleponDesa ?? '08xx-xxxx-xxxx' }}</p>
            <p class="mb-1">Email: {{ $emailDesa ?? 'desa@email.com' }}</p>
        </div>
        <div class="md:w-1/2">
            <iframe src="{{ $mapsEmbed ?? 'https://maps.google.com/maps?q=-7.250445,112.768845&z=15&output=embed' }}" width="100%" height="200" class="rounded shadow" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Mobile menu toggle
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.remove('hidden');
    });

    document.getElementById('menu-close').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('hidden');
    });
</script>
@endpush