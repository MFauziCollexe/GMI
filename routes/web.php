<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome'])->name('home');

Route::get('/perusahaan-kami', [HomeController::class, 'perusahaanKami'])->name('perusahaan-kami.index');

Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan.index');

Route::get('/inovasi', [HomeController::class, 'inovasi'])->name('inovasi.index');

Route::get('/karir', [HomeController::class, 'karir'])->name('karir.index');

Route::get('/kontak-kami', [HomeController::class, 'kontakKami'])->name('kontak-kami.index');