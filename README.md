# Sistem Informasi Desa

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![Vite](https://img.shields.io/badge/Vite-B73BFE?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)

Sistem Informasi Desa adalah aplikasi web berbasis Laravel yang dirancang untuk membantu administrasi dan pelayanan publik di tingkat desa.

## Fitur Utama

-   🏠 **Profil Desa** - Informasi lengkap tentang desa
-   📝 **Layanan Publik** - Pengajuan surat secara online
-   📰 **Berita & Pengumuman** - Update kegiatan desa
-   📷 **Galeri** - Dokumentasi kegiatan dan potensi desa
-   👥 **Data Warga** - Manajemen data kependudukan
-   🏛️ **Struktur Pemerintahan** - Informasi aparatur desa
-   🌿 **Potensi Desa** - UMKM, wisata, dan produk unggulan

## Teknologi

-   **Backend**: Laravel 12
-   **Frontend**: Tailwind CSS
-   **Bundler**: Vite
-   **Database**: MySQL
-   **Authentication**: Laravel Sanctum

## Persyaratan Sistem

-   PHP 8.2+
-   Composer 2.8+
-   Node.js 22+
-   MySQL 8.0+
-   Web server (Apache/Nginx)

## Instalasi

1. Clone repository:
    ```bash
    git clone git@github.com:AhmadSubadri/company-profile-desa.git
    cd sistem-informasi-desa
    ```
2. Install dependensi PHP:
    ```bash
    composer install
    ```
3. Install dependensi JavaScript:
    ```bash
    npm install
    ```
4. Buat file .env:
    ```bash
    cp .env.example .env
    ```
5. Generate key aplikasi:
    ```bash
    php artisan key:generate
    ```
6. Konfigurasi database di .env:
    ```bash
    DB_DATABASE=nama_database
    DB_USERNAME=username
    DB_PASSWORD=password
    ```
7. Jalankan migrasi dan seeder:
    ```bash
    php artisan migrate --seed
    ```
8. Compile assets:
    ```bash
    npm run build
    ```
9. Jalankan server backend Laravel:
    ```bash
    php artisan serve
    ```
10. Jalankan server frontend (Vite) / compile asset Tailwind:
    ```bash
    npm run dev
    ```

## Struktur Proyek

    ```bash
    sistem-informasi-desa/
    ├── app/ # Logika aplikasi
    │ ├── Models/ # Model database
    │ ├── Http/ # Controller dan middleware
    │ └── ... # Komponen lainnya
    ├── config/ # File konfigurasi
    ├── database/ # Migrasi dan seeder
    ├── public/ # Aset publik
    ├── resources/ # View dan aset frontend
    │ ├── views/ # Blade templates
    │ ├── css/ # File CSS
    │ └── js/ # File JavaScript
    ├── routes/ # Definisi route
    ├── storage/ # File yang disimpan
    └── tests/ # Unit testing
    ```
