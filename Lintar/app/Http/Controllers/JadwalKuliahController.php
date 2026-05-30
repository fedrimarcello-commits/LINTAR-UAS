<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKuliah;

class JadwalKuliahController extends Controller
{
    public function lihatJadwal()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $jadwal = JadwalKuliah::all();

        return view('jadwal', ['jadwal' => $jadwal]);
    }
}
