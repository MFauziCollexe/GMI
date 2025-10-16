<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ open: false }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golden Multi Indotama</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS & JS (via Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js (jika belum ada di app.js, bisa ditambahkan langsung di head atau sebelum </body>) -->
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

</head>
<body class="bg-gray-100 font-sans antialiased">
    
    <!-- Sertakan Header Partial -->
    @include('partials.header')

    <!-- Konten Utama Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- Sertakan Footer Partial (jika sudah dibuat) -->
    @include('partials.footer')

</body>
</html>