@extends('layouts.app')

@section('content')
<div class="px-8 py-40 text-center bg-cover bg-center bg-no-repeat" style="background-image: url('/images/backgrounds/bg-home2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl shadow-2xl w-3/4 max-w-6xl m-8 overflow-hidden mt-[-120px] mx-auto">
    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4" style="padding-top: 20px;">
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
  </div>

  <div  id="about" class="px-10 py-10 bg-white">
    <div class="max-w-6xl mx-auto p-6">
      <!-- Grid Container -->
        <h2 class="text-2xl font-extrabold text-white -mb-10 bg-gradient-to-r from-slate-900 to-indigo-500 px-6 py-3 rounded">SELAMAT DATANG DI</h2>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 bg-gradient-to-r from-slate-900 to-indigo-500 px-6 py-3 rounded">
          GOLDEN MULTI INDOTAMA
        </h1>
      <div class="grid grid-rows-[auto_1fr] gap-6 -mt-4">
        <!-- Bagian Atas -->
        <div>
          <p class="text-black leading-relaxed indent-8 text-justify opacity-90 py-4">
            Di Golden Multi Indotama (GMI), kami menyediakan solusi logistik rantai dingin terpadu yang berlandaskan pada keandalan, kesegaran, dan kepercayaan. Dengan menggabungkan fasilitas penyimpanan dingin berteknologi tinggi serta transportasi darat dan laut yang terpadu, kami menghadirkan layanan menyeluruh yang disesuaikan dengan kebutuhan klien yang terus berkembang.
          </p>
        </div>
        
        <!-- Bagian Bawah: 2 Kolom -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 -mt-10">
          <div>
            <p class="text-black leading-relaxed indent-8 text-justify opacity-90 py-4">
              Didukung oleh tim profesional dan infrastruktur modern, kami berkomitmen untuk mendukung bisnis di seluruh Indonesia melalui pengelolaan rantai dingin yang efisien, aman, dan berkelanjutan. Misi kami sederhana — membantu mitra kami mengatasi tantangan dalam operasi rantai pasok serta memastikan produk mereka tiba di pasar dalam kondisi terbaik.
            </p>
            <p class="text-black text-justify leading-relaxed">
              Kami berpegang pada nilai profesionalisme, inovasi, dan konsistensi — prinsip yang menjadi dasar dalam setiap langkah dan kemitraan yang kami bangun.
            </p>
          </div>
          <div>
            
            <!-- <img src="{{ asset('images/backgrounds/bg-aboutus.png') }}" 
            alt="Cold Storage Warehouse" 
            class="max-w-80 object-cover"> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="px-20 py-10 bg-gray-50">
      <div class="grid grid-cols-3 gap-4">
        <!-- Kolom kiri -->
        <div class="col-span-1 bg-[#10141f]/10 p-4 shadow rounded">
            <h2 class="font-bold text-black text-[20px] mb-3">Keunggulan Utama Kami</h2>
            <ul class="space-y-2 text-sm">
                <li class="flex items-center hover:bg-sky-600 gap-4 bg-blue-500 shadow-md shadow-blue-500/50 rounded">
                  <img src="{{ asset('images/icons/map64x64.png') }}" alt="Location icon" class="w-16 h-16 invert brightness-0 object-contain flex-shrink-0">
                  <span class="text-sm font-bold text-white">Aksesibilitas yang mudah</span>
                </li>

                <li class="flex items-center hover:bg-sky-600 gap-4 bg-blue-500 shadow-md shadow-blue-500/50 rounded">
                  <img src="{{ asset('images/icons/shield64x64.png') }}" alt="Security icon" class="w-16 h-16 invert brightness-0 object-contain flex-shrink-0">
                  <span class="text-sm font-bold text-white">Sistem keamanan 24/7</span>
                </li>

                <li class="flex items-center hover:bg-sky-600 gap-4 bg-blue-500 shadow-md shadow-blue-500/50 rounded">
                  <img src="{{ asset('images/icons/suhu64x64.png') }}" alt="Temperature icon" class="w-16 h-16 invert brightness-0 object-contain flex-shrink-0">
                  <span class="text-sm font-bold text-white">Pemantauan suhu otomatis 24/7</span>
                </li>

                <li class="flex items-center hover:bg-sky-600 gap-4 bg-blue-500 shadow-md shadow-blue-500/50 rounded">
                  <img src="{{ asset('images/icons/comp64x64.png') }}" alt="WMS icon" class="w-16 h-16 invert brightness-0 object-contain flex-shrink-0">
                  <span class="text-sm font-bold text-white">Didukung oleh Warehouse Management System (WMS)</span>
                </li>
            </ul>
        </div>

        <!-- Kolom kanan -->
        <div class="col-span-2 bg-slate-800 text-white p-6 rounded shadow">
            <h2 class="text-4xl font-bold mb-2">Kami memiliki keahlian <br> dalam solusi penyimpanan rantai dingin</h2>
            <p class="indent-8 text-justify opacity-90 py-4">
                Terletak strategis di Kawasan Industri Jl. Rungkut Industri II, Surabaya, fasilitas kami menempati lokasi yang sangat mudah dijangkau dari berbagai arah transportasi utama. Posisi ini memberikan keunggulan dalam hal efisiensi distribusi dan kemudahan akses bagi pelanggan maupun mitra logistik.
                Dengan jarak yang dekat ke pelabuhan utama, jalan tol, dan pusat industri, kami dapat memastikan alur pengiriman produk berjalan lancar, cepat, dan aman. Lokasi yang ideal ini juga mendukung koordinasi operasional harian secara optimal, sehingga seluruh aktivitas penyimpanan dan distribusi dapat berjalan dengan presisi dan ketepatan waktu yang tinggi.
            </p>
        </div>

        <!-- Kolom bawah (full kanan) -->
        <div class="col-span-3 bg-black/10 p-6 shadow rounded">
            <h2 class="font-bold text-black text-[32px] mb-3 text-center">Fasilitas & Kapasitas</h2>
              <div class="grid grid-cols-1 md:grid-cols-4 gap-2 mt-2">
                <div class="hover:bg-sky-600 bg-blue-500 shadow-blue-500/50
                          p-6 rounded-lg shadow-md hover:shadow-md transition 
                          flex flex-col items-center text-center gap-0">
                  <img src="{{ asset('images/icons/parking.png') }}" 
                      alt="Parking icon" 
                      class="w-32 h-32 invert brightness-0 object-contain">
                  <span class="text-sm font-bold text-white">
                    Area parkir yang luas, dapat menampung hingga 30 kontainer
                  </span>
                </div>
                <div class="hover:bg-sky-600 bg-blue-500 shadow-blue-500/50 p-6 
                          rounded-lg shadow-md hover:shadow-xl transition 
                          flex flex-col items-center text-center gap-0">
                  <img src="{{ asset('images/icons/inventory.png') }}" 
                      alt="Parking icon" 
                      class="w-32 h-32 invert brightness-0 object-contain">
                  <span class="text-sm font-bold text-white">
                    Kapasitas penyimpanan (Tahap 1): ±10,000 posisi pallet (PP)
                  </span>
                </div>
                <div class="hover:bg-sky-600 bg-blue-500 shadow-blue-500/50 p-6 rounded-lg shadow-md hover:shadow-xl transition 
                          flex flex-col items-center text-center gap-0">
                  <img src="{{ asset('images/icons/truck.png') }}" 
                      alt="Parking icon" 
                      class="w-32 h-32 invert brightness-0 object-contain">
                  <span class="text-sm font-bold text-white">
                    8 Dermaga pemuatan yang dilengkapi dengan pelindung dermaga dan penyeimbang
                  </span>
                </div>
                <div class="hover:bg-sky-600 bg-blue-500 shadow-blue-500/50 p-6 rounded-lg shadow-md hover:shadow-xl transition 
                          flex flex-col items-center text-center gap-0">
                  <img src="{{ asset('images/icons/pallete.png') }}" 
                      alt="Parking icon" 
                      class="w-32 h-32 invert brightness-0 object-contain">
                  <span class="text-sm font-bold text-white">
                    Tahap 2 (Q1 2026): Tambahan ±12,000 PP
                  </span>
                </div>
              </div>
        </div>
    </div>
  </div>

</div>

<div id="services" class="px-8 py-20 bg-white"> 
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-6">Layanan Kami</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
        <div class="bg-slate-100 p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-4">Penyimpanan Cold Storage</h3>
            <p class="text-gray-600">
              Menyediakan fasilitas penyimpanan bersuhu terkontrol untuk berbagai jenis produk, memastikan kualitas tetap terjaga.
            </p>
        </div>
        <div class="bg-slate-100 p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-4">Pemantauan Suhu Digital</h3>
            <p class="text-gray-600">
              Sistem pemantauan suhu real-time berbasis teknologi digital untuk memastikan kondisi optimal selama penyimpanan.
            </p>
        </div>
        <div class="bg-slate-100 p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-xl font-semibold mb-4">Manajemen Rantai Dingin</h3>
            <p class="text-gray-600">
              Solusi manajemen rantai dingin yang terintegrasi untuk meningkatkan efisiensi logistik Anda.
            </p>
        </div>
      </div>
  </div>
</div>

@endsection
