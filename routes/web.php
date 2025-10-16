<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Anda bisa ganti 'welcome' dengan view lain jika sudah ada
})->name('home'); // Ini adalah nama route: 'home'

Route::get('/perusahaan-kami', function () {
    return view('pages.perusahaan_kami'); // Mengarahkan ke file perusahaan_kami.blade.php
})->name('perusahaan-kami.index'); // Nama route: 'perusahaan-kami.index'

Route::get('/layanan', function () {
    return view('pages.layanan'); // Mengarahkan ke file layanan.blade.php
})->name('layanan.index'); // Nama route: 'layanan.index'

Route::get('/inovasi', function () {
    return view('pages.inovasi'); // Mengarahkan ke file inovasi.blade.php
})->name('inovasi.index'); // Nama route: 'inovasi.index'

Route::get('/karir', function () {
    return view('pages.karir'); // Mengarahkan ke file karir.blade.php
})->name('karir.index'); // Nama route: 'karir.index'

Route::get('/kontak-kami', function () {
    return view('pages.kontak_kami'); // Mengarahkan ke file kontak_kami.blade.php
})->name('kontak-kami.index'); // Nama route: 'kontak-kami.index'