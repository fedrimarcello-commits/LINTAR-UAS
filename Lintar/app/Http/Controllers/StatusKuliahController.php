<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusKuliah;

class StatusKuliahController extends Controller
{
    public function lihatStatusKuliah()
    {
        $data_status = StatusKuliah::all();
        return view('status_kuliah', ['data_status' => $data_status]);
    }

public static function membuatStatusKuliah($nim)
    {
        StatusKuliah::create([
            'th_akademik' => 'Gasal 2025', 'status' => 'Aktif', 'sks_ambil' => 20, 'sks_peroleh' => 20, 'ips' => 3.75, 'sks_ambil_kumulatif' => 20, 'sks_peroleh_kumulatif' => 20, 'ipk' => 3.75
        ]);    
        StatusKuliah::create([
            'th_akademik' => 'Genap 2025', 'status' => 'Aktif', 'sks_ambil' => 20, 'sks_peroleh' => 0, 'ips' => 0, 'sks_ambil_kumulatif' => 0, 'sks_peroleh_kumulatif' => 0, 'ipk' => 0
        ]);
    }
}