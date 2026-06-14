<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiPsikologiController extends Controller
{
    public function lihatKonsultasiPsikologi()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        return view('konsultasi_psikologi');
    }
}
