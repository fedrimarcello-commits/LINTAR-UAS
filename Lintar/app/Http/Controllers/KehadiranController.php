<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kehadiran;

class KehadiranController extends Controller
{
    public function lihatKehadiran()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');
        $semua_kehadiran = Kehadiran::all();

        $kehadiran_saya = [];
        foreach ($semua_kehadiran as $item) {
            if ($item->nim == $nim_login) {
                $kehadiran_saya[] = $item;
            }
        }

        return view('kehadiran', ['data_kehadiran' => $kehadiran_saya]);
    }

    public static function membuatKehadiran($nim)
    {
        $data_kehadiran = [
            ['kode' => 'TK13030', 'nama_mk' => 'NUMERICAL METHOD', 'kelas' => 'A', 'pertemuan' => 0, 'hadir' => 0],
            ['kode' => 'TK13034', 'nama_mk' => 'OPERATING SYSTEMS', 'kelas' => 'A', 'pertemuan' => 0, 'hadir' => 0],
            ['kode' => 'TK13038', 'nama_mk' => 'ALGEBRA & DISCRETE MATHEMATICS', 'kelas' => 'A', 'pertemuan' => 0, 'hadir' => 0],
            ['kode' => 'TK13039', 'nama_mk' => 'INTRODUCTION TO ARTIFICIAL INTELLIGENCE', 'kelas' => 'A', 'pertemuan' => 0, 'hadir' => 0],
            ['kode' => 'TK23007', 'nama_mk' => 'DATA STRUCTURES', 'kelas' => 'A', 'pertemuan' => 0, 'hadir' => 0],
            ['kode' => 'TK23022', 'nama_mk' => 'BACK-END PROGRAMMING', 'kelas' => 'A', 'pertemuan' => 0, 'hadir' => 0]
        ];

        foreach ($data_kehadiran as $mk) {
            $kehadiran = new Kehadiran();
            $kehadiran->nim = $nim;
            $kehadiran->kode_mk = $mk['kode'];
            $kehadiran->nama_mk = $mk['nama_mk'];
            $kehadiran->kelas = $mk['kelas'];
            $kehadiran->jumlah_pertemuan = $mk['pertemuan'];
            $kehadiran->jumlah_kehadiran = $mk['hadir'];
            $kehadiran->save();
        }
    }
}
