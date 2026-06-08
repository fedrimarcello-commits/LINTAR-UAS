<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiKhs;

class KsmController extends Controller
{
    public function lihatKsm()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');
        $semua_khs = NilaiKhs::all();

        $matkul_saya = [];
        $total_sks = 0;
        foreach ($semua_khs as $item) {
            if ($item->nim == $nim_login) {
                $matkul_saya[] = $item;
                $total_sks = $total_sks + $item->sks;
            }
        }

        return view('ksm', ['data_matkul' => $matkul_saya, 'total_sks' => $total_sks]);
    }
}
