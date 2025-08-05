<header class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('assets/images/logo-desa.png') }}" alt="Logo Desa" class="h-12 w-12 rounded-full">
            <div>
                <h1 class="text-xl font-bold">Desa {{ $namaDesa ?? 'Bero jaya timur' }}</h1>
                <p class="text-sm text-gray-500">Bersama membangun desa yang mandiri dan sejahtera</p>
            </div>
        </div>

        <!-- Hamburger button for mobile/tablet -->
        <button id="menu-toggle" class="lg:hidden flex items-center px-3 py-2 border rounded text-green-700 border-green-700 focus:outline-none" aria-label="Toggle Menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex gap-6">
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Beranda</x-nav-link>
            <x-nav-link href="{{ route('profil') }}" :active="request()->routeIs('profil')">Profil Desa</x-nav-link>
            <x-nav-link href="{{ route('pemerintahan') }}" :active="request()->routeIs('pemerintahan')">Pemerintahan</x-nav-link>
            <x-nav-link href="{{ route('layanan') }}" :active="request()->routeIs('layanan')">Layanan Publik</x-nav-link>
            <x-nav-link href="{{ route('berita') }}" :active="request()->routeIs('berita')">Berita & Pengumuman</x-nav-link>
            <x-nav-link href="{{ route('galeri') }}" :active="request()->routeIs('galeri')">Galeri</x-nav-link>
            <x-nav-link href="{{ route('kontak') }}" :active="request()->routeIs('kontak')">Kontak</x-nav-link>
        </nav>
    </div>

    <!-- Mobile/Tablet Navigation -->
    <nav id="mobile-menu" class="lg:hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 hidden">
        <div class="bg-white w-4/5 max-w-xs h-full shadow-lg p-6 flex flex-col gap-4 animate-slideInLeft">
            <button id="menu-close" class="self-end mb-4 text-gray-700" aria-label="Tutup Menu">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Beranda</x-nav-link>
            <x-nav-link href="{{ route('profil') }}" :active="request()->routeIs('profil')">Profil Desa</x-nav-link>
            <x-nav-link href="{{ route('pemerintahan') }}" :active="request()->routeIs('pemerintahan')">Pemerintahan</x-nav-link>
            <x-nav-link href="{{ route('layanan') }}" :active="request()->routeIs('layanan')">Layanan Publik</x-nav-link>
            <x-nav-link href="{{ route('berita') }}" :active="request()->routeIs('berita')">Berita & Pengumuman</x-nav-link>
            <x-nav-link href="{{ route('galeri') }}" :active="request()->routeIs('galeri')">Galeri</x-nav-link>
            <x-nav-link href="{{ route('kontak') }}" :active="request()->routeIs('kontak')">Kontak</x-nav-link>
        </div>
    </nav>
</header>