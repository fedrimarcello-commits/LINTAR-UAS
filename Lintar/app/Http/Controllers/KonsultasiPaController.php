<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KonsultasiPa;

class KonsultasiPaController extends Controller
{
    public function lihatKonsultasiPa()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nama = session('user_aktif');
        $nim = session('nim_aktif');

        $semua_konsultasi = KonsultasiPa::all();
        $riwayat = [];
        foreach ($semua_konsultasi as $item) {
            if ($item->nim == $nim) {
                $riwayat[] = $item;
            }
        }

        return view('konsultasi_pa', ['nama' => $nama, 'nim' => $nim, 'riwayat' => $riwayat]);
    }

    public function kirimPesan(Request $request)
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $konsultasi = new KonsultasiPa();
        $konsultasi->nim = session('nim_aktif');
        $konsultasi->isi = $request->isi;
        $konsultasi->waktu = date('Y-m-d H:i:s');
        $konsultasi->save();

        return redirect('/konsultasi-pa')->with('Sukses', 'Pesan berhasil dikirim');
    }
}
