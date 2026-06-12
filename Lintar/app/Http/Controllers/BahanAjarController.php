<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKuliah;

class BahanAjarController extends Controller
{
    public function lihatBahanAjar()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }
        
        $jadwal = JadwalKuliah::all();
        return view('bahan_ajar', ['jadwal' => $jadwal]);
    }
}
