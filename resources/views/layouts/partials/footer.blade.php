<footer class="bg-green-700 text-white py-6 mt-8">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4">
        <div class="flex items-center space-x-2 mb-2 md:mb-0">
            <img src="{{ asset('assets/images/logo-kabupaten.png') }}" alt="Logo Pemda" class="h-8 w-8 rounded-full">
            <span class="font-semibold">Pemerintah Kabupaten {{ $namaKabupaten ?? 'Nama Kabupaten' }}</span>
        </div>
        <div class="flex space-x-4 mb-2 md:mb-0">
            <a href="#" class="hover:underline">Instagram</a>
            <a href="#" class="hover:underline">Facebook</a>
            <a href="#" class="hover:underline">YouTube</a>
        </div>
        <div class="text-sm">&copy; {{ date('Y') }} Desa {{ $namaDesa ?? 'Bero jaya timur' }}. All rights reserved.</div>
    </div>
</footer>