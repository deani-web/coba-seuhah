@extends('welcome')

@section('content')

<section class="bg-orange-100 py-20 text-center">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-5xl font-bold text-red-700 mb-4">Seuhah Snack</h1>
            <p class="text-xl text-gray-800 mb-6">
                Cemilan pedas yang bikin nagih! Cobain varian Basreng Pedas, Kerupuk Bantet, dan Makaroni Bantet dari Seuhah Snack yang terkenal dengan rasa pedas menggigit dan kualitas premium.
            </p>
            <a href="{{ route('pages.layanan') }}" 
               class="bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 transition"
               title="Lihat Varian Snack Pedas Seuhah Snack">
                Lihat Varian Snack Kami
            </a>
        </div>
        <div>
            <img src="{{ asset('images/cemilan-pedas-enak-terbaik.jpeg') }}" 
                 alt="Hero Image Cemilan Pedas Seuhah Snack - Basreng, Kerupuk Bantet, Makaroni Bantet"
                 title="Hero Image Cemilan Pedas Seuhah Snack"
                 loading="lazy"
                 class="rounded-xl shadow-lg">
        </div>
    </div>
</section>

@endsection
