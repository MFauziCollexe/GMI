<header class="fixed top-0 left-0 right-0 z-50 bg-slate-900 text-white shadow-md">
    <nav class="container mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            {{-- Ganti dengan path logo Anda --}}
            <img src="{{ asset('images/logo/gmi-putih.png') }}" alt="GOLDEN MULTI INDOTAMA" class="h-10">
        </a>

        <!-- Navigasi Utama -->
        <div class="hidden md:flex items-center space-x-6">

            {{-- Menu Utama: Perusahaan Kami --}}
            {{-- Tambahkan x-data di div terluar untuk menampung seluruh komponen dropdown --}}
            <div x-data="{ open: false }"
                @mouseenter="open = true"
                @mouseleave="open = false"
                class="relative group" {{-- Tambahkan kelas 'group' untuk Tailwind JIT/Legacy hover --}}
                >
                <a href="{{ route('perusahaan_kami') }}"
                class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                    {{ request()->routeIs('perusahaan_kami') ? 'underline text-yellow-400' : '' }}
                "
                >
                    Perusahaan Kami
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-slate-900 ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
                    x-cloak {{-- Tambahkan x-cloak untuk menyembunyikan elemen sebelum Alpine JS diinisialisasi --}}
                    >
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        {{-- Sub-menu: Profil Perusahaan --}}
                        <a href="{{ route('perusahaan_kami') }}#profil-perusahaan" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('perusahaan_kami') && request()->hash == '#profil-perusahaan' ? 'underline text-white' : '' }}
                        " role="menuitem">Profil Perusahaan</a>

                        {{-- Sub-menu: Visi & Misi --}}
                        <a href="{{ route('perusahaan_kami') }}#visi-misi" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('perusahaan_kami') && request()->hash == '#visi-misi' ? 'underline text-white' : '' }}
                        " role="menuitem">Visi & Misi</a>

                        {{-- Sub-menu: Fasilitas --}}
                        <a href="{{ route('perusahaan_kami') }}#fasilitas" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('perusahaan_kami') && request()->hash == '#fasilitas' ? 'underline text-white' : '' }}
                        " role="menuitem">Fasilitas</a>

                        {{-- Sub-menu: Nilai Perusahaan< --}}
                        <a href="{{ route('perusahaan_kami') }}#nilai" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('perusahaan_kami') && request()->hash == '#nilai' ? 'underline text-white' : '' }}
                        " role="menuitem">Nilai Perusahaan</a>
                    </div>
                </div>
            </div>

            <div class="relative group">
                <a href="{{ route('layanan') }}" 
                class="flex items-center gap-1 text-white font-semibold hover:text-yellow-400 transition
                        {{ request()->routeIs('layanan') ? 'underline text-yellow-400' : '' }}">
                    Layanan
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="w-4 h-4 mt-[2px]" fill="none" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <!-- Dropdown -->
                <div class="absolute left-0 mt-2 w-56 bg-[#0b1739] text-white rounded-lg shadow-lg 
                            border border-gray-700 z-50 py-2 opacity-0 scale-95 
                            group-hover:opacity-100 group-hover:scale-100 transition-all 
                            duration-200 ease-out invisible group-hover:visible">

                    <a href="{{ route('layanan') }}#penyimpanan-multi-suhu"
                    class="block px-5 py-2 hover:bg-[#18244d] hover:text-yellow-400 transition-colors">
                    Penyimpanan Multi-Suhu
                    </a>

                    <a href="{{ route('layanan') }}#distribusi-cepat-aman"
                    class="block px-5 py-2 hover:bg-[#18244d] hover:text-yellow-400 transition-colors">
                    Distribusi Cepat & Aman
                    </a>

                    <a href="{{ route('layanan') }}#manajemen-rantai-dingin"
                    class="block px-5 py-2 hover:bg-[#18244d] hover:text-yellow-400 transition-colors">
                    Manajemen Rantai Dingin
                    </a>

                    <a href="{{ route('layanan') }}#penanganan-produk-sensitif"
                    class="block px-5 py-2 hover:bg-[#18244d] hover:text-yellow-400 transition-colors">
                    Penanganan Produk Sensitif
                    </a>

                    <a href="{{ route('layanan') }}#smart-cold-monitoring"
                    class="block px-5 py-2 hover:bg-[#18244d] hover:text-yellow-400 transition-colors">
                    Smart Cold Monitoring
                    </a>

                    <a href="{{ route('layanan') }}#sewa-ruang-pendingin"
                    class="block px-5 py-2 hover:bg-[#18244d] hover:text-yellow-400 transition-colors">
                    Sewa Ruang Pendingin
                    </a>
                </div>
            </div>


            
            <div x-data="{ open: false }"
                @mouseenter="open = true"
                @mouseleave="open = false"
                class="relative group" {{-- Tambahkan kelas 'group' untuk Tailwind JIT/Legacy hover --}}
                >
                <a href="{{ route('inovasi') }}"
                class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                    {{ request()->routeIs('inovasi') ? 'underline text-yellow-400' : '' }}
                "
                >
                    Inovasi
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                
                <div x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-slate-900 ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
                    x-cloak {{-- Tambahkan x-cloak untuk menyembunyikan elemen sebelum Alpine JS diinisialisasi --}}
                >
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        {{-- Sub-menu: Teknologi & Inovasi --}}
                        <a href="{{ route('inovasi') }}#teknologi_&_inovasi" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('inovasi') && request()->hash == '#teknologi_&_inovasi' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Teknologi & Inovasi</a>

                        {{-- Sub-menu: Solusi Penyimpanan Cerdas --}}
                        <a href="{{ route('inovasi') }}#solusi_penyimpanan_cerdas" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('inovasi') && request()->hash == '#solusi_penyimpanan_cerdas' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Solusi Penyimpanan Cerdas</a>

                        {{-- Sub-menu: Penelitian dan Pengembangan (R&D) --}}
                        <a href="{{ route('inovasi') }}#penelitian_dan_pengembangan" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('inovasi') && request()->hash == '#penelitian_dan_pengembangan' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Penelitian dan Pengembangan (R&D)</a>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }"
                @mouseenter="open = true"
                @mouseleave="open = false"
                class="relative group" {{-- Tambahkan kelas 'group' untuk Tailwind JIT/Legacy hover --}}
                >
                <a href="{{ route('karir') }}"
                class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                    {{ request()->routeIs('karir') ? 'underline text-yellow-400' : '' }}
                "
                >
                    Karir
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-slate-900 ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
                    x-cloak {{-- Tambahkan x-cloak untuk menyembunyikan elemen sebelum Alpine JS diinisialisasi --}}
                >
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        {{-- Sub-menu: Bergabung Bersama Kami --}}
                        <a href="{{ route('karir') }}#bergabung_bersama_kami" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('karir') && request()->hash == '#bergabung_bersama_kami' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Bergabung Bersama Kami</a>

                        {{-- Sub-menu: Mengapa Kami --}}
                        <a href="{{ route('karir') }}#mengapa_kami" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('karir') && request()->hash == '#mengapa_kami' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Mengapa Kami</a>
                    </div>
                </div>
            </div>

            <!-- <a href="#" class="hover:text-blue-800 transition-colors duration-200 font-medium">Hubungi Kami</a> -->
            <a href="{{ route('kontak-kami') }}" class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                {{-- Kondisi aktif: cocokkan nama route 'kontak-kami' --}}
                {{ request()->routeIs('kontak-kami') ? 'underline text-yellow-400' : '' }}
            ">
                Hubungi Kami
            </a>
        </div>

        <!-- Tombol Customer Portal dan Pilihan Bahasa -->
        <div class="flex items-center space-x-4">
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-200">
                Customer Portal
            </a>
            <div class="relative overflow-visible" x-data="{ open: false }">
                <button 
                    @click="open = !open" 
                    class="flex items-center gap-1 text-sm font-medium focus:outline-none"
                >
                    <img src="{{ asset('images/icons/Flag_of_Indonesia.png') }}" class="w-5 h-5" alt=""> 
                    <span class="text-white">ID</span>
                </button>

                <div 
                    x-show="open"
                    @click.outside="open = false"
                    x-transition
                    class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg border z-50 py-2"
                >
                    <a href="{{ url('lang/id') }}" 
                    class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150">
                        <img src="{{ asset('images/icons/Flag_of_Indonesia.png') }}" class="w-5 h-5" alt=""> 
                        <span>Indonesia</span>
                    </a>

                    <a href="{{ url('lang/en') }}" 
                    class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150">
                        <img src="{{ asset('images/icons/Flag_of_the_United_Kingdom.png') }}" class="w-5 h-5" alt=""> 
                        <span>Inggris</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Button (Hamburger) -->
        <div class="md:hidden"> {{-- Hanya muncul di bawah breakpoint 'md' (yaitu di mobile) --}}
            <button @click="open = !open" class="text-black hover:text-gray-700 focus:outline-none bg-white p-2 rounded-md"> {{-- text-black dan bg-white agar kontras dengan header --}}
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu (muncul saat hamburger diklik) -->
    <div x-show="open" @click.outside="open = false" class="md:hidden bg-gray-700 pb-4" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
        <div x-data="{ subMenuOpen: false }" class="relative">
            <button @click="subMenuOpen = !subMenuOpen" class="flex justify-between items-center w-full px-4 py-2 text-base text-white hover:bg-gray-600 focus:outline-none">
                Perusahaan Kami
                <svg class="ml-1 h-5 w-5 transform transition-transform duration-200" :class="{'rotate-180': subMenuOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div x-show="subMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="bg-gray-800 text-white py-1">
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Cold Storage Services</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Brand</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Value</a>
            </div>
        </div>

        <div x-data="{ subMenuOpen: false }" class="relative">
            <button @click="subMenuOpen = !subMenuOpen" class="flex justify-between items-center w-full px-4 py-2 text-base text-white hover:bg-gray-600 focus:outline-none">
                Layanan
                <svg class="ml-1 h-5 w-5 transform transition-transform duration-200" :class="{'rotate-180': subMenuOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div x-show="subMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="bg-gray-800 text-white py-1">
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Gudang Pendingin</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Armada Berpendingin</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Solusi Logistik</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Cross Docking</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Monitoring Suhu</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Jangkauan Layanan Kami</a>
            </div>
        </div>

        <div x-data="{ subMenuOpen: false }" class="relative">
            <button @click="subMenuOpen = !subMenuOpen" class="flex justify-between items-center w-full px-4 py-2 text-base text-white hover:bg-gray-600 focus:outline-none">
                Inovasi
                <svg class="ml-1 h-5 w-5 transform transition-transform duration-200" :class="{'rotate-180': subMenuOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div x-show="subMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="bg-gray-800 text-white py-1">
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Teknologi & Inovasi</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Solusi Penyimpanan Cerdas</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Penelitian & Pengembangan (R&D)</a>
            </div>
        </div>

        <div x-data="{ subMenuOpen: false }" class="relative">
            <button @click="subMenuOpen = !subMenuOpen" class="flex justify-between items-center w-full px-4 py-2 text-base text-white hover:bg-gray-600 focus:outline-none">
                Karir
                <svg class="ml-1 h-5 w-5 transform transition-transform duration-200" :class="{'rotate-180': subMenuOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div x-show="subMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="bg-gray-800 text-white py-1">
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Join Our Company Careers</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Why Join Us?</a>
            </div>
        </div>

        <div class="px-4 py-2 flex items-center space-x-2 text-sm">
            <a href="#" class="font-bold text-blue-400">ID</a>
            <span class="text-gray-400">|</span>
            <a href="#" class="hover:text-blue-400">EN</a>
        </div>
    </div>

</header>