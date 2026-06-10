<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiKhs;

class KhsController extends Controller
{
    public function lihatKHS()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');
        $semua_khs = NilaiKhs::all();

        $khs_saya = [];
        $total_sks = 0;
        $total_bobot = 0;

        foreach ($semua_khs as $item) {
            if ($item->nim == $nim_login) {
                $khs_saya[] = $item;
                $total_sks = $total_sks + $item->sks;
                $total_bobot = $total_bobot + $item->bobot_kualitas;
            }
        }

        $ips = 0;
        if ($total_sks > 0) {
            $ips = round($total_bobot / $total_sks, 2);
        }

        return view('nilai-khs', [
            'data_khs' => $khs_saya,
            'total_sks' => $total_sks,
            'total_bobot' => $total_bobot,
            'ips' => $ips
        ]);
    }

    public static function membuatNilaiKHS($nim)
    {
        $data_khs = [
            ['kode' => 'TK13030', 'nama_mk' => 'NUMERICAL METHOD', 'status' => 'B', 'sks' => 4, 'huruf' => null, 'angka' => null, 'bobot' => null],
            ['kode' => 'TK13034', 'nama_mk' => 'OPERATING SYSTEMS', 'status' => 'B', 'sks' => 2, 'huruf' => null, 'angka' => null, 'bobot' => null],
            ['kode' => 'TK13038', 'nama_mk' => 'ALGEBRA & DISCRETE MATHEMATICS', 'status' => 'B', 'sks' => 4, 'huruf' => null, 'angka' => null, 'bobot' => null],
            ['kode' => 'TK13039', 'nama_mk' => 'INTRODUCTION TO ARTIFICIAL INTELLIGENCE', 'status' => 'B', 'sks' => 2, 'huruf' => null, 'angka' => null, 'bobot' => null],
            ['kode' => 'TK23007', 'nama_mk' => 'DATA STRUCTURES', 'status' => 'B', 'sks' => 4, 'huruf' => null, 'angka' => null, 'bobot' => null],
            ['kode' => 'TK23022', 'nama_mk' => 'BACK-END PROGRAMMING', 'status' => 'B', 'sks' => 4, 'huruf' => null, 'angka' => null, 'bobot' => null]
        ];

        foreach ($data_khs as $mk) {
            $khs = new NilaiKhs();
            $khs->nim = $nim;
            $khs->kode_mk = $mk['kode'];
            $khs->nama_mk = $mk['nama_mk'];
            $khs->status = $mk['status'];
            $khs->sks = $mk['sks'];
            $khs->nilai_huruf = $mk['huruf'];
            $khs->nilai_angka = $mk['angka'];
            $khs->bobot_kualitas = $mk['bobot'];
            $khs->save();
        }
    }
}
