@extends('welcome')

@section('content')

<section class="py-16 bg-orange-50 text-center">
    <h2 class="text-4xl font-bold text-red-700 mb-10">Varian Cemilan Pedas</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">

        <!-- Basreng -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition border-t-4 border-red-600">
            <img src="{{ asset('images/basreng-pedas-murah.jpeg') }}" alt="Basreng Pedas" class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-red-700 mb-2">Basreng Pedas</h3>
            <p class="text-gray-700 mb-2">Bakso goreng krispi dengan balutan bumbu super pedas, cocok buat nyemil kapan aja!</p>
            <p class="text-lg font-semibold text-red-600 mb-4">Rp 7.000</p>

            <hr class="my-4 border-red-200">
            <h4 class="text-md font-semibold text-red-600 mb-3">Keunggulan:</h4>
            <div class="space-y-2 text-sm text-gray-700 text-center">
                <div>🔥 Rasa yang unik dan khas</div>
                <div>🍘 Tekstur yang renyah dan gurih</div>
                <div>💪 Kaya akan protein</div>
                <div>🍴 Cocok untuk camilan atau pelengkap makanan</div>
            </div>
        </div>

        <!-- Kerupuk Bantet -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition border-t-4 border-orange-500">
            <img src="{{ asset('images/kerupuk-bantet-pedas-murah.jpg') }}" alt="Kerupuk Bantet" class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-orange-600 mb-2">Kerupuk Bantet</h3>
            <p class="text-gray-700 mb-2">Tekstur bantet renyah, rasa pedas menyengat! Dijamin bikin nagih terus.</p>
            <p class="text-lg font-semibold text-orange-500 mb-4">Rp 7.000</p>

            <hr class="my-4 border-orange-200">
            <h4 class="text-md font-semibold text-orange-500 mb-3">Keunggulan:</h4>
            <div class="space-y-2 text-sm text-gray-700 text-center">
                <div>🌶️ Rasa pedas yang khas dan menarik</div>
                <div>🥨 Tekstur yang renyah dan crunchy</div>
                <div>🍴 Cocok untuk camilan atau pelengkap makanan</div>
                <div>💸 Ukuran beragam & harga terjangkau</div>
            </div>
        </div>

        <!-- Makaroni Bantet -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition border-t-4 border-yellow-400">
            <img src="{{ asset('images/makaroni-bantet-pedas-murah.jpeg') }}" alt="Makaroni Pedas" class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-yellow-500 mb-2">Makaroni Bantet</h3>
            <p class="text-gray-700 mb-2">Makaroni garing dengan rasa pedas khas ala Seuhah! Cocok buat pecinta level maksimal!</p>
            <p class="text-lg font-semibold text-yellow-500 mb-4">Rp 7.000</p>

            <hr class="my-4 border-yellow-200">
            <h4 class="text-md font-semibold text-yellow-500 mb-3">Keunggulan:</h4>
            <div class="space-y-2 text-sm text-gray-700 text-center">
                <div>🌶️ Rasa pedas yang khas dan menarik</div>
                <div>🥓 Tekstur yang crunchy dan renyah</div>
                <div>⚡ Sumber energi tinggi karbohidrat</div>
                <div>🍴 Cocok untuk camilan atau pelengkap makanan</div>
            </div>
        </div>

    </div>
</section>

@endsection
