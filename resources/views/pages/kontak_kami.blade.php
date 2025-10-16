@extends('layouts.app')

@section('content')
<div 
    class="min-h-screen flex items-center justify-center bg-cover bg-center py-5" 
    style="background-image: url('/images/backgrounds/bg-hubungi-kami.png');">
    <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-2xl grid grid-cols-1 lg:grid-cols-2 w-full max-w-6xl m-8 overflow-hidden">

        {{-- === Kolom Kiri (Informasi) === --}}
        <div class="flex flex-col text-left bg-black/50 text-white p-10 lg:p-14">
            <h1 class="text-4xl font-bold mb-6 text-left">Hubungi Kami</h1>
            <p class="text-base mb-8 max-w-md">
                Kami siap membantu Anda menemukan solusi terbaik untuk kebutuhan penyimpanan dingin dan logistik Anda.
                Dengan pengalaman dan komitmen tinggi di bidang manajemen rantai pasok berpendingin, kami menghadirkan layanan yang aman, efisien, dan terpercaya untuk menjaga kualitas produk Anda tetap prima dari awal hingga akhir distribusi.
                Didukung oleh fasilitas cold storage berstandar tinggi, armada logistik berpendingin modern, serta tim profesional yang berdedikasi.
            </p>

            <div class="space-y-4 text-sm text-blue-100">
                <a href="{{ route('home') }}"
                    class="inline-block border border-yellow-500 text-white px-6 py-2 text-sm tracking-wider font-semibold
                        hover:bg-yellow-500 hover:text-white transition-all duration-300">
                    LEARN MORE
                </a>
            </div>
        </div>

        {{-- === Kolom Kanan (Form Kontak) === --}}
        <div class="p-10 lg:p-14 bg-transparent">
            <form action="#" method="POST" class="space-y-6">
                @csrf

                {{-- Nama Depan & Nama Belakang --}}
                <div>
                    <label data-twe-select-label-ref>Example label</label>
                </div>
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                    <div class="relative">
                        <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">
                        Nama Depan
                        </label>
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 mt-6 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </span>
                        <input type="text" name="first-name" id="first-name" required
                        class="mt-1 block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        placeholder="Nama depan">
                    </div>
                    <div class="relative">
                        <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">
                        Nama Belakang
                        </label>
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 mt-6 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </span>
                        <input type="text" name="last-name" id="last-name" required
                        class="mt-1 block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        placeholder="Nama belakang">
                    </div>
                </div>

                {{-- Nomor Telepon --}}
                <div class="relative">
                    <label for="phone-number" class="block text-sm font-medium text-gray-700 mb-1">
                        Nomor Telepon
                    </label>

                    <!-- Ikon WhatsApp -->
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 mt-6 text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
                        <path d="M20.52 3.48A11.85 11.85 0 0 0 12 0a11.85 11.85 0 0 0-8.52 3.48A11.85 11.85 0 0 0 0 12c0 2.09.55 4.12 1.6 5.9L0 24l6.3-1.64A11.9 11.9 0 0 0 12 24a11.85 11.85 0 0 0 8.52-3.48A11.85 11.85 0 0 0 24 12a11.85 11.85 0 0 0-3.48-8.52zM12 22a9.93 9.93 0 0 1-5.08-1.38l-.36-.21-3.74.98 1-3.64-.23-.37A9.93 9.93 0 0 1 2 12c0-5.51 4.49-10 10-10s10 4.49 10 10-4.49 10-10 10zm5.43-7.57c-.3-.15-1.77-.87-2.05-.97-.28-.1-.48-.15-.68.15-.2.3-.78.97-.96 1.17-.18.2-.35.23-.65.08-.3-.15-1.26-.46-2.4-1.46-.89-.79-1.49-1.77-1.67-2.07-.18-.3-.02-.46.13-.61.13-.13.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.38-.03-.53-.08-.15-.68-1.63-.93-2.23-.25-.6-.5-.5-.68-.5h-.58c-.2 0-.53.08-.8.38-.27.3-1.05 1.02-1.05 2.5s1.08 2.9 1.23 3.1c.15.2 2.12 3.25 5.13 4.56.72.31 1.28.5 1.72.64.72.23 1.37.2 1.88.12.57-.08 1.77-.72 2.02-1.43.25-.71.25-1.33.18-1.46-.08-.13-.28-.2-.58-.35z"/>
                        </svg>
                    </span>
                    <!-- Input -->
                    <input 
                        type="tel" 
                        name="phone-number" 
                        id="phone-number" 
                        required 
                        pattern="[0-9]*"
                        inputmode="numeric"
                        class="mt-1 block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                        placeholder="Nomor WhatsApp"
                    >
                </div>

                {{-- Email --}}
                <div class="relative">
                    <label for="email-address" class="block text-sm font-medium text-gray-700 mb-1">
                        Alamat Email
                    </label>

                    <!-- Ikon email -->
                    <!-- <div class="flex border border-gray-300 rounded-md overflow-hidden focus-within:ring-2 focus-within:ring-blue-500"> -->
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 mt-6 text-blue-500 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>

                        <!-- Input -->
                        <input
                            id="email-address"
                            name="email-address"
                            type="email"
                            required
                            placeholder="Email"
                            class="mt-1 block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        >
                    <!-- </div> -->
                </div>

                {{-- Pesan --}}
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">
                        Pesan
                    </label>

                    <div class="flex border border-gray-300 rounded-md overflow-hidden focus-within:ring-2 focus-within:ring-blue-500">
                        <span class="flex items-start justify-center px-3 pt-3 text-blue-500 bg-gray-50 border-r border-gray-300">
                        <!-- Ikon chat / pesan -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-4 4z" />
                        </svg>
                        </span>

                        <textarea
                        id="message"
                        name="message"
                        rows="6"
                        required
                        placeholder="Tulis pesan Anda di sini..."
                        class="w-full px-3 py-3 text-gray-700 focus:outline-none resize-none sm:text-sm"
                        ></textarea>
                    </div>
                </div>

                {{-- Tombol Kirim --}}
                <div class="space-y-4 text-sm text-blue-100">
                    <button type="submit"
                        class="inline-block border border-blue-500 text-black px-6 py-2 text-sm tracking-wider font-semibold
                            hover:bg-blue-500 hover:text-white transition-all duration-300"
                            href="#">
                        KIRIM PESAN
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div 
    class="min-h-screen flex items-center justify-center bg-cover bg-center py-5">
    <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-2xl grid grid-cols-1 w-full max-w-6xl m-8 overflow-hidden">
        <div class="p-10 lg:p-14 bg-transparent">
            <h2 class="text-2xl font-bold mb-6 text-left">Lokasi Kami</h2>
            <p class="text-base mb-8 max-w-md">
                Jl. Raya Rungkut Industri II No.45, Kali Rungkut, Kec. Rungkut, Surabaya, Jawa Timur 60298
            </p>
            <div class="w-full h-[80vh]">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.254625052378!2d112.76209857357219!3d-7.325271672035757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2345885249b0bc1f%3A0x6c85ede18c67bea9!2sPT.Golden%20Multi%20Indotama!5e0!3m2!1sen!2sid!4v1759831592090!5m2!1sen!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('phone-number').addEventListener('input', function (e) {
    this.value = this.value.replace(/[^0-9]/g, '');
});
</script>
@endsection
