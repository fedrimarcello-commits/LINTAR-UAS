<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanBeasiswaController extends Controller
{
    public function lihatBeasiswa()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        return view('laporan_beasiswa');
    }
}
