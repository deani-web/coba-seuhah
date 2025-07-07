<nav class="bg-orange-50 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('pages.home') }}" class="text-2xl font-extrabold text-red-700 tracking-wide">
            Seuhah <span class="text-orange-500">Snack</span>
        </a>
        <div class="space-x-6 text-lg font-semibold">
            <a href="{{ route('pages.home') }}" class="text-gray-800 hover:text-red-700 transition">Home</a>
            <a href="{{ route('pages.layanan') }}" class="text-gray-800 hover:text-red-700 transition">Varian</a>
            <a href="{{ route('pages.kontak') }}" class="text-gray-800 hover:text-red-700 transition">Kontak</a>
            <a href="{{ route('pages.tiktok') }}" class="text-gray-800 hover:text-pink-600 transition">TikTok</a> {{-- ✅ Tambahan --}}
        </div>
    </div>
</nav>
