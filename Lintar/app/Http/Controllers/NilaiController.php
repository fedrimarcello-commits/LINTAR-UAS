<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NilaiUts;

class NilaiController extends Controller
{
        public function lihatNilaiUTS() {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }
        $nim_login = session('nim_aktif');
        $semua_nilai = \App\Models\NilaiUts::all();

        $nilai_saya = [];
        foreach ($semua_nilai as $item) {
            if ($item->nim == $nim_login) {
            $nilai_saya[] = $item;
            }
        }
        return view('nilai-uts', ['data_nilai' => $nilai_saya]);
    }

     //Data Nilai ini adalah ada dummy yang langsung dibuat untuk jadi contoh Demo saja, karena siswa tidak input nilai
        public static function membuatNilaiUTS($nim)
    {
        $data_nilai = [
            ['kode' => 'TK13034', 'nama_mk' => 'OPERATING SYSTEMS', 'sks' => 2, 'nilai' => '90.00'],
            ['kode' => 'TK23007', 'nama_mk' => 'DATA STRUCTURES', 'sks' => 4, 'nilai' => '70.00'],
            ['kode' => 'TK13030', 'nama_mk' => 'NUMERICAL METHOD', 'sks' => 4, 'nilai' => null],
            ['kode' => 'TK13038', 'nama_mk' => 'ALGEBRA & DISCRETE MATHEMATICS', 'sks' => 4, 'nilai' => '85.00'],
            ['kode' => 'TK13039', 'nama_mk' => 'INTRODUCTION TO ARTIFICIAL INTELLIGENCE', 'sks' => 2, 'nilai' => '85.00'],
            ['kode' => 'TK23022', 'nama_mk' => 'BACK-END PROGRAMMING', 'sks' => 4, 'nilai' => '87.00']
        ];

        foreach ($data_nilai as $mk) {
            $nilai = new \App\Models\NilaiUts(); 
            $nilai->nim = $nim; 
            $nilai->kode_mk = $mk['kode'];
            $nilai->nama_mk = $mk['nama_mk'];
            $nilai->sks = $mk['sks'];
            $nilai->nilai = $mk['nilai'];
            $nilai->save();
        }
    }
}
