@extends('layouts.app')

@section('content')
<section class="bg-[#0b1739] text-white py-20 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Golden Multi Indotama</h1>
    <p class="text-gray-300 max-w-3xl mx-auto">
        Kami menyediakan solusi penyimpanan dingin terintegrasi yang mendukung rantai pasok produk beku, dingin, dan segar di seluruh Indonesia.
    </p>
</section>

{{-- Profil Perusahaan --}}
<section id="profil-perusahaan" class="py-20 bg-white text-gray-800">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl font-bold mb-4 text-[#0b1739]">Profil Perusahaan</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                PT Golden Multi Indotama adalah perusahaan penyedia jasa <strong>penyimpanan dingin (cold storage)</strong> yang berlokasi di kawasan industri strategis di Surabaya. 
                Dengan sistem pendingin modern dan pengelolaan profesional, kami berkomitmen menjaga kesegaran dan kualitas produk pelanggan.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Kami melayani berbagai industri seperti pangan beku, daging olahan, produk laut, hingga bahan baku industri makanan, dengan layanan yang aman, bersih, dan efisien.
            </p>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80"
                 alt="Cold Storage Facility" class="rounded-2xl shadow-lg">
        </div>
    </div>
</section>

{{-- Visi dan Misi --}}
<section id="visi-misi" class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-10 text-center text-[#0b1739]">Visi & Misi</h2>
        <div class="grid md:grid-cols-2 gap-10">
            <div class="bg-white rounded-2xl shadow-md p-8">
                <h3 class="text-2xl font-semibold text-[#0b1739] mb-3">Visi</h3>
                <p class="text-gray-600">
                    Menjadi penyedia layanan penyimpanan dingin terdepan di Indonesia yang dipercaya karena kualitas, keandalan, dan inovasi berkelanjutan.
                </p>
            </div>
            <div class="bg-white rounded-2xl shadow-md p-8">
                <h3 class="text-2xl font-semibold text-[#0b1739] mb-3">Misi</h3>
                <ul class="list-disc pl-5 text-gray-600 space-y-2">
                    <li>Menyediakan fasilitas penyimpanan yang higienis dan efisien.</li>
                    <li>Menjaga mutu produk pelanggan dengan sistem pendingin terkendali.</li>
                    <li>Mengutamakan keselamatan kerja dan keberlanjutan lingkungan.</li>
                    <li>Memberikan pelayanan cepat, ramah, dan profesional.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Fasilitas Kami --}}
<section id="fasilitas" class="py-20 bg-white text-gray-800">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-10 text-[#0b1739]">Fasilitas Kami</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1615475091114-5b1e2f9d6c3b?auto=format&fit=crop&w=500&q=80" 
                     class="rounded-xl mb-4" alt="Cold Room">
                <h3 class="font-semibold text-lg mb-2">Ruang Pendingin Modern</h3>
                <p class="text-gray-600 text-sm">Dilengkapi sistem monitoring suhu real-time untuk menjaga kestabilan penyimpanan produk.</p>
            </div>
            <div class="p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1604335399105-a0c4f0b2a1a7?auto=format&fit=crop&w=500&q=80" 
                     class="rounded-xl mb-4" alt="Truck Berpendingin">
                <h3 class="font-semibold text-lg mb-2">Armada Berpendingin</h3>
                <p class="text-gray-600 text-sm">Armada logistik berpendingin siap menjaga suhu produk selama distribusi.</p>
            </div>
            <div class="p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1581578017423-3b6a8c48e55b?auto=format&fit=crop&w=500&q=80" 
                     class="rounded-xl mb-4" alt="Security and Safety">
                <h3 class="font-semibold text-lg mb-2">Keamanan & Kebersihan</h3>
                <p class="text-gray-600 text-sm">Prosedur kebersihan ketat dan sistem keamanan 24 jam untuk memastikan kualitas produk terjaga.</p>
            </div>
        </div>
    </div>
</section>

{{-- Nilai Perusahaan --}}
<section id="nilai" class="py-20 bg-[#0b1739] text-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-10">Nilai Perusahaan</h2>
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-[#101c49] rounded-2xl p-6 shadow-lg">
                <h3 class="font-semibold text-xl mb-2 text-yellow-400">Integritas</h3>
                <p class="text-gray-300 text-sm">Menjunjung kejujuran dan tanggung jawab dalam setiap layanan kami.</p>
            </div>
            <div class="bg-[#101c49] rounded-2xl p-6 shadow-lg">
                <h3 class="font-semibold text-xl mb-2 text-yellow-400">Keandalan</h3>
                <p class="text-gray-300 text-sm">Memberikan layanan tepat waktu dengan standar mutu tinggi.</p>
            </div>
            <div class="bg-[#101c49] rounded-2xl p-6 shadow-lg">
                <h3 class="font-semibold text-xl mb-2 text-yellow-400">Inovasi</h3>
                <p class="text-gray-300 text-sm">Terus mengembangkan teknologi dan sistem penyimpanan terkini.</p>
            </div>
            <div class="bg-[#101c49] rounded-2xl p-6 shadow-lg">
                <h3 class="font-semibold text-xl mb-2 text-yellow-400">Profesionalisme</h3>
                <p class="text-gray-300 text-sm">Menjaga standar kerja dan pelayanan terbaik bagi semua mitra.</p>
            </div>
        </div>
    </div>
</section>
@endsection
