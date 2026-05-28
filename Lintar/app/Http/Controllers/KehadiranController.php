<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kehadiran; 

class KehadiranController extends Controller
{
    
    public function lihatKehadiran()
    {
        
        $data_kehadiran = Kehadiran::all();
        return view('kehadiran', ['data_kehadiran' => $data_kehadiran]);
    }

    
    public static function membuatKehadiran($nim)
    {
        
        Kehadiran::create([
            'kode_mk' => 'TK13030', 'nama_mk' => 'NUMERICAL METHOD', 'kelas' => 'A', 'jumlah_pertemuan' => 12, 'jumlah_kehadiran' => 12
        ]);
        Kehadiran::create([
            'kode_mk' => 'TK13034', 'nama_mk' => 'OPERATING SYSTEMS', 'kelas' => 'A', 'jumlah_pertemuan' => 12, 'jumlah_kehadiran' => 11
        ]);
        Kehadiran::create([
            'kode_mk' => 'TK13038', 'nama_mk' => 'ALGEBRA & DISCRETE MATHEMATICS', 'kelas' => 'A', 'jumlah_pertemuan' => 13, 'jumlah_kehadiran' => 13
        ]);
        Kehadiran::create([
            'kode_mk' => 'TK13039', 'nama_mk' => 'INTRODUCTION TO ARTIFICIAL INTELLIGENCE', 'kelas' => 'A', 'jumlah_pertemuan' => 0, 'jumlah_kehadiran' => 0
        ]);
        Kehadiran::create([
            'kode_mk' => 'TK23007', 'nama_mk' => 'DATA STRUCTURES', 'kelas' => 'A', 'jumlah_pertemuan' => 9, 'jumlah_kehadiran' => 9
        ]);
        Kehadiran::create([
            'kode_mk' => 'TK23022', 'nama_mk' => 'BACK-END PROGRAMMING', 'kelas' => 'A', 'jumlah_pertemuan' => 12, 'jumlah_kehadiran' => 12
        ]);
    }
}