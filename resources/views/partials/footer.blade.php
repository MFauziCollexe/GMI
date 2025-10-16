<footer class="bg-gray-800 text-gray-300 py-10 shadow-inner">
    <div class="container mx-auto px-4">
        <!-- Bagian Atas Footer: Grid Kolom -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-8 gap-8 md:gap-8 lg:gap-10 mb-8">
            <!-- Kolom 1: Logo & Deskripsi -->
            <div class="col-span-full sm:col-span-2 lg:col-span-2"> {{-- Memperlebar di mobile dan desktop besar --}}
                <a href="/" class="flex items-center mb-4">
                    <img src="{{ asset('images/logo/gmi-putih.png') }}" alt="GOLDEN MULTI INDOTAMA Logo" class="h-10">
                </a>
                <p class="text-sm leading-relaxed mb-4">
                    Menyediakan solusi penyimpanan dingin berstandar tinggi untuk menjamin kualitas, keamanan, dan konsistensi produk dari penyimpanan hingga distribusi.
                </p>
                <!-- Ikon Sosial Media -->
                <div class="flex space-x-4">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition-colors duration-200" aria-label="Facebook">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.776-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition-colors duration-200" aria-label="Twitter">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.162 5.656a8.384 8.384 0 01-2.402.658A4.196 4.196 0 0022 2.768a8.386 8.386 0 01-2.662 1.012A4.196 4.196 0 0015.6 2c-2.321 0-4.201 1.88-4.201 4.198 0 .329.036.65.101.958A11.854 11.854 0 013.064 3.07a4.197 4.197 0 001.3 5.587A4.196 4.196 0 012.87 8.084v.053c0 2.037 1.455 3.733 3.385 4.12A4.203 4.203 0 015.01 12.6c.542 1.685 2.118 2.913 3.999 2.947A8.407 8.407 0 013 18.32c-1.042 0-2.046-.1-3-.263a11.867 11.867 0 0013.929 7.005c1.68 1.294 3.829 2.062 6.07 2.062a11.859 11.859 0 005.181-.72A23.868 23.868 0 0024 20.352c0-.339-.01-.676-.02-.998a17.294 17.294 0 004.228-4.382 17.062 17.062 0 00.32-4.136c-.053-.021-.107-.041-.16-.062z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition-colors duration-200" aria-label="LinkedIn">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM4 14.929h4V21H4zM6 10a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>

            <!-- Kolom 2: Navigasi Utama (Perusahaan Kami, Inovasi, Karir) -->
            <div class="col-span-1">
                <h4 class="text-white text-lg font-semibold mb-4">Perusahaan Kami</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Cold Storage Services</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Brand</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Value</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Layanan (Sub-menu jika diperlukan) -->
            <div class="col-span-1">
                <h4 class="text-white text-lg font-semibold mb-4">Layanan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Gudang Pendingin</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Armada Logistik</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Solusi Supply Chain</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Layanan Tambahan</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Jangkauan Layanan</a></li>
                </ul>
            </div>
            
            <!-- Kolom 4: Hubungi Kami -->
            <div class="col-span-1">
                <h4 class="text-white text-lg font-semibold mb-4">Inovasi</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Teknologi & Inovasi</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Solusi Penyimpanan Cerdas</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Penelitian & Pengembangan (R&D)</a></li>
                </ul>
            </div>

            <!-- Kolom 5: Kebijakan & Sumber Daya (Contoh) -->
            <div class="col-span-1">
                <h4 class="text-white text-lg font-semibold mb-4">Karir</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Join Our Company's Careers</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Why Join Us?</a></li>
                </ul>
            </div>

            <!-- Kolom 6: Informasi Kontak Langsung -->
            <div class="col-span-full sm:col-span-2 lg:col-span-2">
                <h4 class="text-white text-lg font-semibold mb-4">Hubungi Kami</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <svg class="h-5 w-5 mr-2 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" /></svg>
                        <span>Jl. Raya Rungkut Industri II No.45, Kali Rungkut, Kec. Rungkut, Surabaya, Jawa Timur 60298</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 mr-2 text-blue-400 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1v3.5c0 .35-.09.7-.24 1.02l-2.2 2.2z" /></svg>
                        <span>Mr.Nazumah <br> +62 812-1775-5267</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 mr-2 text-blue-400 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" /></svg>
                        <span>commercial@coldkeygmi.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Garis Pemisah -->
        <div class="border-t border-gray-700 my-8"></div>

        <!-- Bagian Bawah Footer: Hak Cipta & Nama Mr. Nazumah -->
        <div class="text-center text-sm text-gray-500 ">
            <p>&copy; {{ date('Y') }} Golden Multi Indotama. Hak Cipta Dilindungi.</p>
            <p class="mt-1">Design by Mukhammad Fauzi.</p>
        </div>
    </div>
</footer>