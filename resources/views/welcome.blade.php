@extends('layouts.app')

@section('content')
<!-- ================= HERO SECTION ================= -->
<div class="relative px-8 py-32 md:py-48 text-center bg-cover bg-center bg-no-repeat" 
     style="background-image: url('{{ asset('images/backgrounds/bg-home2.png') }}');">
  <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl shadow-2xl w-3/4 max-w-6xl mx-auto mt-[-120px] overflow-hidden">
    <h1 class="text-4xl md:text-5xl font-extrabold text-white pt-6">
      SOLUSI <br> RANTAI DINGIN <br> BERBASIS TEKNOLOGI DIGITAL
    </h1>
    <p class="text-white text-lg max-w-2xl mx-auto mb-8">
      Kami menyediakan layanan cold storage modern untuk meningkatkan efisiensi logistik Anda.
    </p>
  </div>

  <a href="#about" 
     class="inline-block bg-sky-500 hover:bg-sky-600 text-white font-semibold px-6 py-3 rounded-full shadow-md transition mt-[80px]">
    Baca Lebih Lanjut >
  </a>

  <!-- Gradien lembut ke bawah -->
  <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-b from-transparent to-white"></div>
    
</div>

<!-- ================= ABOUT SECTION (DENGAN SLIDESHOW) ================= -->
<div id="about" 
     x-data="{ current: 0, images: [
      '{{ asset('images/content/about1.png') }}',
      '{{ asset('images/content/about2.png') }}',
      '{{ asset('images/content/about3.png') }}'
     ] }"
     x-init="setInterval(() => current = (current + 1) % images.length, 4000)"
     class="px-6 md:px-20 py-16 bg-white">

  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">

    <!-- Gambar Slideshow -->
    <div class="relative flex justify-center md:justify-start overflow-hidden rounded-2xl shadow-xl w-full h-[350px] md:h-[450px]">
      <template x-for="(image, index) in images" :key="index">
        <img 
          :src="image" 
          alt="Gedung Cold Storage Golden Multi Indotama"
          class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000"
          :class="current === index ? 'opacity-100' : 'opacity-0'">
      </template>
      
      <!-- Indicator -->
      <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <template x-for="(image, index) in images" :key="index">
          <div 
            class="w-3 h-3 rounded-full border border-white"
            :class="current === index ? 'bg-blue-500' : 'bg-white/40'">
          </div>
        </template>
      </div>
    </div>

    <!-- Konten -->
    <div>
      <h2 class="text-4xl font-bold text-slate-800 mb-4">
        Partner Strategis untuk Solusi Cold Storage di Surabaya
      </h2>
      <p class="text-gray-600 mb-8 leading-relaxed text-justify ">
        PT. <span class="font-semibold text-slate-800">Golden Multi Indotama (GMI)</span> menyediakan solusi 
        <span class="font-semibold text-slate-800">Cold Storage</span> terintegrasi untuk mendukung rantai pasok bisnis Anda. 
        Dengan layanan unggulan yang mencakup penyimpanan dingin, logistik, dan distribusi, serta didukung oleh teknologi modern 
        dan tenaga ahli berpengalaman, kami berkomitmen memberikan keandalan, efisiensi, dan kesegaran terbaik bagi setiap produk 
        yang Anda percayakan kepada kami.
      </p>

      <!-- Statistik -->
      <div class="grid grid-cols-2 gap-6">
        @foreach ([
          ['gmi-meat.png', 'Menangani unggas, daging, laut & es krim dan lain-lain.'],
          ['gmi-store.png', 'Menangani unggas, daging, laut & es krim dan lain-lain.'],
          ['gmi-company.png', 'Mendukung hotel, restoran, dan bisnis dengan solusi cold chain terpercaya.'],
        ] as [$icon, $text])
          <div class="flex items-center gap-4">
            <div class="flex items-center gap-4">
              <img src="{{ asset('images/icons/' . $icon) }}" 
                  alt="Icon" 
                  class="w-12 h-12 object-contain">
              <p class="text-gray-700 leading-relaxed text-sm">
                {{ $text }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<!-- ================= KEUNGGULAN & FASILITAS ================= -->
<div class="px-6 md:px-20 py-16 bg-gray-200">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Keunggulan -->
    <div class="bg-[#10141f]/10 p-4 rounded shadow">
      <h2 class="font-bold text-black text-xl mb-3">Keunggulan Utama Kami</h2>
      <ul class="space-y-2 text-sm">
        @foreach ([
          ['gmi-map.png', 'Aksesibilitas yang mudah'],
          ['gmi-shield.png', 'Sistem keamanan 24/7'],
          ['gmi-suhu.png', 'Pemantauan suhu otomatis 24/7'],
          ['gmi-comp.png', 'Didukung oleh Warehouse Management System (WMS)'],
        ] as [$icon, $text])
        <li class="flex items-center gap-4 bg-blue-500 hover:bg-sky-600 shadow-md shadow-blue-500/50 -p-2 rounded transition">
          <img src="{{ asset('images/icons/' . $icon) }}" class="w-16 h-16 invert brightness-0 object-contain flex-shrink-0" alt="">
          <span class="text-sm font-bold text-white">{{ $text }}</span>
        </li>
        @endforeach
      </ul>
    </div>

    <!-- Deskripsi -->
    <div class="md:col-span-2 bg-slate-800 text-white p-6 rounded shadow">
      <h2 class="text-4xl font-bold mb-2">
        Kami memiliki keahlian <br> dalam solusi penyimpanan rantai dingin
      </h2>
      <p class="text-justify opacity-90 py-4 leading-relaxed">
        Terletak strategis di Kawasan Industri Jl. Rungkut Industri II, Surabaya, fasilitas kami menempati lokasi 
        yang sangat mudah dijangkau dari berbagai arah transportasi utama. Posisi ini memberikan keunggulan dalam 
        hal efisiensi distribusi dan kemudahan akses bagi pelanggan maupun mitra logistik. Dengan jarak yang dekat 
        ke pelabuhan utama, jalan tol, dan pusat industri, kami memastikan alur pengiriman produk berjalan lancar, 
        cepat, dan aman.
      </p>
    </div>

    <!-- Fasilitas -->
    <div class="md:col-span-3 bg-black/10 p-6 rounded shadow mt-6">
      <h2 class="font-bold text-black text-3xl mb-6 text-center">Fasilitas & Kapasitas</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 ease-in-out">
        @foreach ([
          ['gmi-parking.png', 'Area parkir yang luas, dapat menampung hingga 30 kontainer'],
          ['gmi-inventory.png', 'Kapasitas penyimpanan (Tahap 1): ±10,000 posisi pallet (PP)'],
          ['gmi-truck.png', '8 Dermaga pemuatan yang dilengkapi dengan pelindung dermaga dan penyeimbang'],
          ['gmi-pallete.png', 'Tahap 2 (Q1 2026): Tambahan ±12,000 PP'],
        ] as [$icon, $desc])
        <div class="feature-item duration-500 bg-blue-500 hover:bg-sky-600 shadow-blue-500/50 p-6 rounded-lg shadow-md hover:shadow-xl transition flex flex-col items-center text-center gap-2">
          <img src="{{ asset('images/icons/' . $icon) }}" class="w-24 h-24 invert brightness-0 object-contain" alt="">
          <span class="text-sm font-bold text-white">{{ $desc }}</span>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<!-- ================= SERVICES ================= -->
<div id="services" class="py-10 bg-white"> 
  <!-- <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-6">Layanan Kami</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
      @foreach ([
        ['Penyimpanan Cold Storage', 'Menyediakan fasilitas penyimpanan bersuhu terkontrol untuk berbagai jenis produk, memastikan kualitas tetap terjaga.'],
        ['Pemantauan Suhu Digital', 'Sistem pemantauan suhu real-time berbasis teknologi digital untuk memastikan kondisi optimal selama penyimpanan.'],
        ['Manajemen Rantai Dingin', 'Solusi manajemen rantai dingin yang terintegrasi untuk meningkatkan efisiensi logistik Anda.'],
      ] as [$title, $desc])
      <div class="bg-slate-100 p-6 rounded-lg shadow-md hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-4">{{ $title }}</h3>
        <p class="text-gray-600">{{ $desc }}</p>
      </div>
      @endforeach
    </div>
  </div> -->
    <h2 class="font-bold text-black text-3xl mb-6 text-center">Komitmen Kami</h2>
    <div id="features" class="flex justify-center flex-wrap gap-10 md:gap-16 text-black mt-10">
      @foreach ([
        ['gmi-green.png', 'Green', 'text-lime-600'],
        ['gmi-modern.png', 'Modern', 'text-blue-600'],
        ['gmi-integrated.png', 'Integrated', 'text-orange-600'],
      ] as [$icon, $label, $hoverColor])
        <div class="feature-item flex flex-col items-center group cursor-pointer opacity-0 transition-all duration-500">
          <div class="bg-white p-4 rounded-full shadow-md group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
            <img src="{{ asset('images/icons/' . $icon) }}" alt="{{ $label }} Icon" class="w-10 h-10">
          </div>
          <p class="mt-3 text-sm md:text-base font-semibold transition-colors duration-300 group-hover:{{ $hoverColor }}">
            {{ $label }}
          </p>
        </div>
      @endforeach
    </div>

</div>
@endsection
