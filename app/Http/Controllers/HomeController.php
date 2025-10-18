<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        // data untuk bagian About → Statistik
        $aboutStats = [
            ['gmi-meat.png', 'Menangani unggas, daging, laut & es krim dan lain-lain.'],
            ['gmi-store.png', 'Menangani unggas, daging, laut & es krim dan lain-lain.'],
            ['gmi-company.png', 'Mendukung hotel, restoran, dan bisnis dengan solusi cold chain terpercaya.'],
        ];

        // data untuk bagian Keunggulan
        $advantages = [
            ['gmi-map.png', 'Aksesibilitas yang mudah'],
            ['gmi-shield.png', 'Sistem keamanan 24/7'],
            ['gmi-suhu.png', 'Pemantauan suhu otomatis 24/7'],
            ['gmi-comp.png', 'Didukung oleh Warehouse Management System (WMS)'],
        ];

        // data untuk bagian Fasilitas
        $facilities = [
            ['gmi-parking.png', 'Area parkir yang luas, dapat menampung hingga 30 kontainer'],
            ['gmi-inventory.png', 'Kapasitas penyimpanan (Tahap 1): ±10,000 posisi pallet (PP)'],
            ['gmi-truck.png', '8 Dermaga pemuatan dengan pelindung dermaga dan penyeimbang'],
            ['gmi-pallete.png', 'Tahap 2 (Q1 2026): Tambahan ±12,000 PP'],
        ];

        // data untuk bagian Komitmen
        $commitments = [
            ['gmi-green.png', 'Green', 'text-lime-600'],
            ['gmi-modern.png', 'Modern', 'text-blue-600'],
            ['gmi-integrated.png', 'Integrated', 'text-orange-600'],
        ];

        // data untuk bagian Klien Kami
        $clients = [
            'uniliver.png',
            'gem.png',
            'indofood.png',
            'pokphand.png',
            'nestle.png',
        ];

        // kirim semua data ke view
        return view('welcome', compact('aboutStats', 'advantages', 'facilities', 'commitments', 'clients'));
    }
}
    