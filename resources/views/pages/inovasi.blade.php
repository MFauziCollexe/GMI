@extends('layouts.app') {{-- Asumsi Anda memiliki layout utama --}}

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6">Inovasi</h1>
        <p class="text-lg mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        
        {{-- Bagian Inovasi --}}
        <section id="inovasi" class="mb-12 py-8 border-t border-gray-200">
            <h2 class="text-3xl font-semibold mb-4">Teknologi dan Inovasi</h2>
            <p>Kami berkomitmen untuk terus berinovasi dalam setiap aspek layanan kami. Dengan mengadopsi teknologi terbaru dan praktik terbaik di industri, kami memastikan bahwa solusi penyimpanan dingin yang kami tawarkan selalu efisien, aman, dan ramah lingkungan.</p>
            <p class="mt-4">Pelajari lebih lanjut tentang inisiatif inovatif kami dan bagaimana kami berkontribusi pada kemajuan industri logistik dingin.</p>
        </section>

        {{-- Solusi Penyimpanan Cerdas --}}
        <section id="solusi_penyimpanan_cerdas" class="mb-12 py-8 border-t border-gray-200">
            <h2 class="text-3xl font-semibold mb-4">Solusi Penyimpanan Cerdas</h2>
            <p>Kami menawarkan solusi penyimpanan cerdas yang memanfaatkan teknologi terkini untuk meningkatkan efisiensi dan keamanan. Dengan sistem pemantauan suhu dan kelembapan yang canggih, kami memastikan bahwa produk Anda selalu dalam kondisi optimal.</p>
            <p class="mt-4">Temukan lebih lanjut tentang bagaimana solusi penyimpanan cerdas kami dapat membantu bisnis Anda.</p>
        </section>

        {{-- Penelitian dan Pengembangan (R&D) --}}
        <section id="penelitian_dan_pengembangan" class="mb-12 py-8 border-t border-gray-200">
            <h2 class="text-3xl font-semibold mb-4">Penelitian dan Pengembangan (R&D)</h2>
            <p>Kami percaya bahwa inovasi dimulai dengan penelitian yang mendalam. Tim R&D kami bekerja tanpa lelah untuk mengidentifikasi tren industri, mengembangkan teknologi baru, dan meningkatkan proses yang ada. Dengan berinvestasi dalam penelitian dan pengembangan, kami memastikan bahwa kami selalu selangkah lebih maju dalam memenuhi kebutuhan pelanggan kami.</p>
            <p class="mt-4">Pelajari lebih lanjut tentang proyek R&D kami dan bagaimana kami berkontribusi pada kemajuan industri logistik dingin.</p>
        </section>

    </div>
@endsection