@extends('layouts.app') {{-- Asumsi Anda memiliki layout utama --}}

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6">Karir</h1>
        <p class="text-lg mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        {{-- Bagian Bergabung Bersama Kami --}}
        <section id="bergabung_bersama_kami" class="mb-12 py-8 border-t border-gray-200">
            <h2 class="text-3xl font-semibold mb-4">Bergabung Bersama Kami</h2>
            <p>Kami selalu mencari individu yang berbakat dan berdedikasi untuk bergabung dengan tim kami. Jika Anda memiliki semangat untuk industri logistik dingin dan ingin berkembang bersama perusahaan yang inovatif, kami mengundang Anda untuk melihat peluang karir yang tersedia.</p>
            <p class="mt-4">Kirimkan CV dan surat lamaran Anda ke email kami di <a href="mailto:hr@coldstorage.com" class="text-blue-600">hr@coldstorage.com</a>.</p>   
        </section>
        {{-- Bagian Mengapa Kami --}}
        <section id="mengapa_kami" class="mb-12 py-8 border-t border-gray-200">
            <h2 class="text-3xl font-semibold mb-4">Mengapa Kami</h2>
            <p>Bekerja di Cold Storage memberikan Anda kesempatan untuk berkembang dalam lingkungan yang dinamis dan mendukung. Kami menawarkan pelatihan berkelanjutan, peluang pengembangan karir, dan budaya kerja yang inklusif. Bergabunglah dengan kami dan jadilah bagian dari tim yang berkomitmen untuk keunggulan dan inovasi.</p>
            <p class="mt-4">Pelajari lebih lanjut tentang manfaat bekerja di Cold Storage dan kisah sukses karyawan kami di sini.</p>
        </section>
        
    </div>
@endsection