<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function perusahaan_Kami()
    {
        return view('pages.perusahaan_kami');
    }
}

