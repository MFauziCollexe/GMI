@extends('layouts.app') {{-- Asumsi Anda memiliki layout utama --}}

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6">Perusahaan Kami</h1>
        <p class="text-lg mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        {{-- Bagian Layanan Penyimpanan Dingin --}}
        <section id="cold-storage-services" class="mb-12 py-8 border-t border-gray-200">
            <h2 class="text-3xl font-semibold mb-4">Layanan Penyimpanan Dingin</h2>
            <p>Kami menyediakan layanan cold storage terkemuka untuk menjaga kualitas produk Anda. Dengan fasilitas modern dan suhu terkontrol, kami menjamin keamanan dan kesegaran barang-barang Anda. Cocok untuk produk makanan, farmasi, dan lainnya yang membutuhkan penyimpanan suhu rendah.</p>
            <p class="mt-4">Detail lebih lanjut mengenai kapasitas, teknologi pendingin, dan area layanan kami tersedia di sini.</p>
        </section>

        {{-- Bagian Brand --}}
        <section id="brand" class="mb-12 py-8 border-t border-gray-200">
            <h2 class="text-3xl font-semibold mb-4">Brand</h2>
            <p>Brand kami berdiri untuk keandalan, inovasi, dan komitmen terhadap kepuasan pelanggan. Dengan sejarah panjang dalam industri logistik dingin, kami terus berupaya menjadi pemimpin pasar dengan memberikan solusi yang efisien dan berkelanjutan.</p>
            <p class="mt-4">Pelajari lebih lanjut tentang filosofi brand kami dan nilai-nilai yang kami junjung tinggi.</p>
        </section>

        {{-- Bagian Value --}}
        <section id="value" class="mb-12 py-8 border-t border-gray-200">
            <h2 class="text-3xl font-semibold mb-4">Value</h2>
            <p>Nilai-nilai inti kami meliputi integritas, excellence dalam operasional, dan fokus pada keberlanjutan. Kami percaya bahwa dengan menjunjung tinggi nilai-nilai ini, kami dapat memberikan layanan terbaik dan membangun hubungan jangka panjang dengan mitra kami.</p>
            <p class="mt-4">Kami berkomitmen untuk memberikan nilai tambah nyata bagi bisnis Anda.</p>
        </section>

    </div>
@endsection