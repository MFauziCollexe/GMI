@extends('layouts.app')

@section('content')
<div class="bg-[#f8fafc]">

    {{-- Hero Section --}}
    <section class="relative bg-[#0b1739] text-white text-center py-24">
        <div class="max-w-4xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Layanan Kami</h1>
            <p class="text-lg text-gray-300">
                Solusi rantai dingin profesional untuk penyimpanan, distribusi, dan manajemen produk Anda.
            </p>
        </div>
    </section>

    {{-- 1. Penyimpanan Multi-Suhu --}}
    <section id="penyimpanan-multi-suhu" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Penyimpanan Multi-Suhu</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Kami menyediakan area penyimpanan dengan berbagai zona suhu — dari beku hingga dingin ringan —
                    untuk menjaga kesegaran dan kualitas produk Anda. Sistem pendingin kami dilengkapi sensor suhu
                    otomatis untuk memastikan kestabilan setiap saat.
                </p>
            </div>
            <img src="https://cdn.pixabay.com/photo/2020/10/01/17/11/store-5619201_1280.jpg"
                 alt="Cold Storage Facility"
                 class="rounded-2xl shadow-lg w-full h-72 object-cover">
        </div>
    </section>

    {{-- 2. Distribusi Cepat & Aman --}}
    <section id="distribusi-cepat-aman" class="py-20 bg-[#f1f5f9]">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <img src="https://cdn.pixabay.com/photo/2019/08/15/17/56/production-4408573_1280.jpg"
                 alt="Cold Chain Distribution"
                 class="rounded-2xl shadow-lg w-full h-72 object-cover order-2 md:order-1">
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Distribusi Cepat & Aman</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Armada truk berpendingin kami siap mendistribusikan produk Anda dengan aman dan tepat waktu.
                    Setiap kendaraan dilengkapi sistem pelacakan GPS dan pengatur suhu real-time.
                </p>
            </div>
        </div>
    </section>

    {{-- 3. Manajemen Rantai Dingin --}}
    <section id="manajemen-rantai-dingin" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Manajemen Rantai Dingin</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Kami menawarkan sistem manajemen rantai dingin terintegrasi — mulai dari penerimaan barang,
                    penyimpanan, hingga pengiriman — untuk memastikan kontrol dan visibilitas penuh terhadap setiap tahap logistik.
                </p>
            </div>
            <img src="https://media.istockphoto.com/id/1397464083/id/foto/pekerja-penyimpanan-dingin-memeriksa-stok-mereka-memetik-produk.jpg?s=1024x1024&w=is&k=20&c=N_-l80NfrZPh8OwicuVRpVmWggNah1ksSw9b5-hOuJs="
                 alt="Cold Chain Management"
                 class="rounded-2xl shadow-lg w-full h-72 object-cover">
        </div>
    </section>

    {{-- 4. Penanganan Produk Sensitif --}}
    <section id="penanganan-produk-sensitif" class="py-20 bg-[#f1f5f9]">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <img src="https://cdn.pixabay.com/photo/2018/07/27/20/49/shipping-3566817_1280.jpg"
                 alt="Sensitive Product Handling"
                 class="rounded-2xl shadow-lg w-full h-72 object-cover order-2 md:order-1">
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Penanganan Produk Sensitif</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Produk seperti farmasi, daging, dan bahan baku sensitif memerlukan perhatian ekstra.
                    Tim kami terlatih dalam standar keamanan pangan dan sanitasi untuk menjamin kualitas produk tetap optimal.
                </p>
            </div>
        </div>
    </section>

    {{-- 5. Smart Cold Monitoring --}}
    <section id="smart-cold-monitoring" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Smart Cold Monitoring</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Sistem pemantauan digital kami memudahkan Anda melacak kondisi suhu dan kelembapan secara langsung.
                    Data dikirim otomatis ke dashboard sehingga Anda bisa mengambil keputusan cepat jika ada penyimpangan.
                </p>
            </div>
            <img src="https://media.istockphoto.com/id/598811530/id/foto/remote-control-ac-dengan-sistem-smart-home.jpg?s=1024x1024&w=is&k=20&c=nHOc1ufYhYmEeq8F9ezpa41byDD4PxzVgmOZkO8wGgU="
                 alt="Smart Cold Monitoring"
                 class="rounded-2xl shadow-lg w-full h-72 object-cover">
        </div>
    </section>

    {{-- 6. Sewa Ruang Pendingin --}}
    <section id="sewa-ruang-pendingin" class="py-20 bg-[#f1f5f9]">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <img src="https://cdn.pixabay.com/photo/2018/08/01/08/55/hotel-3576826_1280.jpg"
                 alt="Cold Room Rental"
                 class="rounded-2xl shadow-lg w-full h-72 object-cover order-2 md:order-1">
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Sewa Ruang Pendingin</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Kami menyediakan ruang pendingin siap pakai dengan berbagai ukuran dan suhu sesuai kebutuhan Anda.
                    Cocok untuk penyimpanan jangka pendek maupun jangka panjang, dengan pengawasan 24 jam.
                </p>
            </div>
        </div>
    </section>

</div>
@endsection
