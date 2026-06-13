<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiPaController extends Controller
{
    public function lihatKonsultasiPa()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nama = session('user_aktif');
        $nim = session('nim_aktif');

        return view('konsultasi_pa', ['nama' => $nama, 'nim' => $nim]);
    }

    public function kirimPesan(Request $request)
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        return redirect('/konsultasi-pa')->with('Sukses', 'Pesan berhasil dikirim');
    }
}
