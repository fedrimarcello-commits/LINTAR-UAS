<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function lihatHalamanUtama()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nama = session('user_aktif');
        $nim = session('nim_aktif');
        return view('halaman_utama', ['nama' => $nama, 'nim' => $nim]);
    }
}
