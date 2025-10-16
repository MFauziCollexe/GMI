<header class="bg-slate-900 text-white shadow-md">
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
                <a href="{{ route('perusahaan-kami.index') }}"
                class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                    {{ request()->routeIs('perusahaan-kami.index') ? 'underline text-yellow-400' : '' }}
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
                        {{-- Sub-menu: Cold Storage Services --}}
                        <a href="{{ route('perusahaan-kami.index') }}#cold-storage-services" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('perusahaan-kami.index') && request()->hash == '#cold-storage-services' ? 'underline text-white' : '' }}
                        " role="menuitem">Layanan Penyimpanan Dingin</a>

                        {{-- Sub-menu: Brand --}}
                        <a href="{{ route('perusahaan-kami.index') }}#brand" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('perusahaan-kami.index') && request()->hash == '#brand' ? 'underline text-white' : '' }}
                        " role="menuitem">Merek</a>

                        {{-- Sub-menu: Value --}}
                        <a href="{{ route('perusahaan-kami.index') }}#value" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('perusahaan-kami.index') && request()->hash == '#value' ? 'underline text-white' : '' }}
                        " role="menuitem">Nilai</a>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }"
                @mouseenter="open = true"
                @mouseleave="open = false"
                class="relative group" {{-- Tambahkan kelas 'group' untuk Tailwind JIT/Legacy hover --}}
                >
                <a href="{{ route('layanan.index') }}"
                class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                    {{ request()->routeIs('layanan.index') ? 'underline text-yellow-400' : '' }}
                "
                >
                    Layanan
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
                        {{-- Sub-menu: Gudang Pendingin --}}
                        <a href="{{ route('layanan.index') }}#gudang-pendingin" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('layanan.index') && request()->hash == '#gudang-pendingin' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Gudang Pendingin</a>

                        {{-- Sub-menu: Armada --}}
                        <a href="{{ route('layanan.index') }}#armada" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('layanan.index') && request()->hash == '#armada' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Armada</a>

                        {{-- Sub-menu: Solusi Logistik --}}
                        <a href="{{ route('layanan.index') }}#solusi-logistik" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('layanan.index') && request()->hash == '#solusi-logistik' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Solusi Logistik</a>

                        {{-- Sub-menu: Jangkauan Layanan Kami --}}  
                        <a href="{{ route('layanan.index') }}#jangkauan-layanan-kami" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('layanan.index') && request()->hash == '#jangkauan-layanan-kami' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Jangkauan Layanan Kami</a>
                    </div>
                </div>
            </div>
            
            <div x-data="{ open: false }"
                @mouseenter="open = true"
                @mouseleave="open = false"
                class="relative group" {{-- Tambahkan kelas 'group' untuk Tailwind JIT/Legacy hover --}}
                >
                <a href="{{ route('inovasi.index') }}"
                class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                    {{ request()->routeIs('inovasi.index') ? 'underline text-yellow-400' : '' }}
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
                        <a href="{{ route('inovasi.index') }}#teknologi_&_inovasi" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('inovasi.index') && request()->hash == '#teknologi_&_inovasi' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Teknologi & Inovasi</a>

                        {{-- Sub-menu: Solusi Penyimpanan Cerdas --}}
                        <a href="{{ route('inovasi.index') }}#solusi_penyimpanan_cerdas" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('inovasi.index') && request()->hash == '#solusi_penyimpanan_cerdas' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Solusi Penyimpanan Cerdas</a>

                        {{-- Sub-menu: Penelitian dan Pengembangan (R&D) --}}
                        <a href="{{ route('inovasi.index') }}#penelitian_dan_pengembangan" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('inovasi.index') && request()->hash == '#penelitian_dan_pengembangan' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Penelitian dan Pengembangan (R&D)</a>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }"
                @mouseenter="open = true"
                @mouseleave="open = false"
                class="relative group" {{-- Tambahkan kelas 'group' untuk Tailwind JIT/Legacy hover --}}
                >
                <a href="{{ route('karir.index') }}"
                class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                    {{ request()->routeIs('karir.index') ? 'underline text-yellow-400' : '' }}
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
                        <a href="{{ route('karir.index') }}#bergabung_bersama_kami" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('karir.index') && request()->hash == '#bergabung_bersama_kami' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Bergabung Bersama Kami</a>

                        {{-- Sub-menu: Mengapa Kami --}}
                        <a href="{{ route('karir.index') }}#mengapa_kami" class="block px-4 py-2 text-sm text-white hover:text-yellow-400 font-medium
                            {{ request()->routeIs('karir.index') && request()->hash == '#mengapa_kami' ? 'underline text-yellow-400' : '' }}
                        " role="menuitem">Mengapa Kami</a>
                    </div>
                </div>
            </div>

            <!-- <a href="#" class="hover:text-blue-800 transition-colors duration-200 font-medium">Hubungi Kami</a> -->
            <a href="{{ route('kontak-kami.index') }}" class="flex items-center hover:text-yellow-400 transition-colors duration-200 font-medium
                {{-- Kondisi aktif: cocokkan nama route 'kontak-kami.index' --}}
                {{ request()->routeIs('kontak-kami.index') ? 'underline text-yellow-400' : '' }}
            ">
                Hubungi Kami
            </a>
        </div>

        <!-- Tombol Customer Portal dan Pilihan Bahasa -->
        <div class="flex items-center space-x-4">
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-200">
                Customer Portal
            </a>
            <div class="hidden md:flex items-center space-x-2">
                <a href="#" class="font-bold text-blue-400">ID</a>
                <span class="text-gray-400">|</span>
                <a href="#" class="hover:text-blue-400 transition-colors duration-200">EN</a>
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
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Armada</a>
                <a href="#" class="block px-8 py-2 text-sm hover:bg-gray-700">Solusi Logistik</a>
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