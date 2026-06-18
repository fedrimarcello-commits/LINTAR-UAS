<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatHasilController extends Controller
{
    public function lihatHasil()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nama = session('user_aktif');
        $nim = session('nim_aktif');
        return view('lihat_hasil', ['nama' => $nama, 'nim' => $nim]);
    }
}
