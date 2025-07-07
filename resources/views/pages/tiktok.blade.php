@extends('welcome')

@section('content')

<section class="py-20 bg-white text-center">
    <div class="max-w-2xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-red-700 mb-4">Temui Kami di TikTok</h1>
        <p class="text-lg text-gray-700 mb-6">
            Ikuti akun resmi <strong>Seuhah Snack</strong> di TikTok dan dapatkan konten seru seputar cemilan pedas, behind-the-scenes produksi, hingga promo spesial untuk followers!
        </p>

        <a href="https://www.tiktok.com/@seuhahsnack0" target="_blank" rel="noopener noreferrer"
           class="inline-block bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">
            Lihat TikTok @seuhahsnack0
        </a>

        <div class="mt-10 flex justify-center">
            <iframe 
                src="https://www.tiktok.com/embed/v2/7496480444683160837" 
                width="325" 
                height="575" 
                frameborder="0" 
                allow="autoplay; encrypted-media" 
                allowfullscreen 
                class="rounded-xl shadow-lg"
                loading="lazy"
            ></iframe>
        </div>
    </div>
</section>

@endsection
