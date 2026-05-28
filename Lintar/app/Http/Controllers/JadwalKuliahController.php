<?php

namespace App\Http\Controllers;

use App\Models\JadwalKuliah;
use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    public function lihatJadwal()
    {
        
        $jadwal = JadwalKuliah::all();
        
        
        return view('jadwal', compact('jadwal'));
    }
}