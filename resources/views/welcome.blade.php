@extends('layouts.app')

@section('content')

<!-- ================= HERO SECTION ================= -->
<div class="relative px-8 py-32 md:py-48 text-center bg-cover bg-center bg-no-repeat" 
     style="background-image: url('{{ asset('images/backgrounds/bg-home2.png') }}');">
  <div class="feature-item duration-500 transition-all bg-slate-800/40 backdrop-blur-sm rounded-xl shadow-2xl w-3/4 max-w-6xl mx-auto mt-[-120px] overflow-hidden">
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
      '{{ asset('images/content/about4.png') }}',
      '{{ asset('images/content/about5.png') }}',
      '{{ asset('images/content/about3.png') }}'
     ] }"
     x-init="setInterval(() => current = (current + 1) % images.length, 4000)"
     class="px-6 md:px-20 py-16 bg-white">
  
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">

    <!-- Gambar Slideshow -->
    <div class="feature-item opacity-0 transition-all duration-500 relative flex justify-center md:justify-start overflow-hidden rounded-2xl shadow-xl w-full h-[350px] md:h-[450px]">
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
        @foreach ($aboutStats as [$icon, $text])
          <div class="feature-item opacity-0 transition-all duration-500 flex items-center gap-4">
            <img src="{{ asset('images/icons/' . $icon) }}" alt="Icon" class="w-12 h-12 object-contain">
            <p class="text-gray-700 leading-relaxed text-sm">{{ $text }}</p>
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
        @foreach ($advantages as [$icon, $text])
          <li class="feature-item opacity-0 transition-all duration-500 flex items-center gap-4 bg-blue-500 hover:bg-sky-600 shadow-md shadow-blue-500/50 -p-2 rounded">
            <img src="{{ asset('images/icons/' . $icon) }}" class="w-16 h-16 invert brightness-0 object-contain" alt="">
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
        @foreach ($facilities as [$icon, $desc])
          <div class="feature-item opacity-0 transition-all duration-500 bg-blue-500 hover:bg-sky-600 shadow-blue-500/50 p-6 rounded-lg shadow-md hover:shadow-xl flex flex-col items-center text-center gap-2">
            <img src="{{ asset('images/icons/' . $icon) }}" class="w-24 h-24 invert brightness-0 object-contain" alt="">
            <span class="text-sm font-bold text-white">{{ $desc }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<!-- ================= Client ================= -->
<div id="client" class="px-6 md:px-20 py-16 bg-white">
  <h2 class="font-bold text-black text-3xl mb-6 text-center">Klien Kami</h2>
  <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 items-center justify-items-center">
    @foreach ($clients as $clientLogo)
      <div class="feature-item opacity-0 transition-all duration-500 flex items-center justify-center p-4">
        <img src="{{ asset('images/clients/' . $clientLogo) }}" alt="Client Logo" class="max-h-16 object-contain transition duration-300">
      </div>
    @endforeach
  </div>
</div>

@endsection
