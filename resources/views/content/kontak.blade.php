<section class="py-20 px-8 bg-gray-50">
    <h2 class="text-3xl font-semibold text-center mb-6">Hubungi Kami</h2>

    <form id="wa-form" class="max-w-xl mx-auto space-y-4">
        <div>
            <label class="block text-sm font-medium">Nama</label>
            <input type="text" id="nama" required class="w-full mt-1 border-gray-300 rounded-md shadow-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" id="email" required class="w-full mt-1 border-gray-300 rounded-md shadow-sm" />
        </div>
        <div>
            <label class="block text-sm font-medium">Pesan</label>
            <textarea id="pesan" rows="4" required class="w-full mt-1 border-gray-300 rounded-md shadow-sm"></textarea>
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Kirim via WhatsApp
        </button>
    </form>
</section>

<!-- Script Kirim ke WhatsApp -->
<script>
    document.getElementById('wa-form').addEventListener('submit', function(e) {
        e.preventDefault();

        let nama = document.getElementById('nama').value;
        let email = document.getElementById('email').value;
        let pesan = document.getElementById('pesan').value;

        let nomorWA = '6281234567890'; // GANTI dengan nomor WhatsApp kamu
        let text = `Halo Seuhah Snack,%0ANama: ${encodeURIComponent(nama)}%0AEmail: ${encodeURIComponent(email)}%0APesan: ${encodeURIComponent(pesan)}`;

        let url = `https://wa.me/${nomorWA}?text=${text}`;
        window.open(url, '_blank');
    });
</script>
