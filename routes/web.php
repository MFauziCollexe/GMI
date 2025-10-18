<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\InnovationController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'welcome'])->name('home');

Route::get('/perusahaan_kami', [CompanyController::class, 'perusahaan_Kami'])->name('perusahaan_kami');

Route::get('/layanan', [ServicesController::class, 'layanan'])->name('layanan');

Route::get('/inovasi', [InnovationController::class, 'inovasi'])->name('inovasi');

Route::get('/karir', [CareerController::class, 'karir'])->name('karir');

Route::get('/kontak-kami', [ContactController::class, 'kontakKami'])->name('kontak-kami');