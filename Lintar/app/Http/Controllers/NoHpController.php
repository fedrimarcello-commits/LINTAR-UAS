<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class NoHpController extends Controller
{
    public function ubahNoHp()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');
        $semua_biodata = Biodata::all();

        $biodata_saya = null;
        foreach ($semua_biodata as $item) {
            if ($item->nim == $nim_login) {
                $biodata_saya = $item;
            }
        }

        if ($biodata_saya == null) {
            return redirect('/biodata');
        }

        return view('ubah_nohp', ['data' => $biodata_saya]);
    }

    public function simpanNoHp(Request $request)
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');
        $semua_biodata = Biodata::all();

        $biodata_saya = null;
        foreach ($semua_biodata as $item) {
            if ($item->nim == $nim_login) {
                $biodata_saya = $item;
            }
        }

        if ($biodata_saya == null) {
            return redirect('/biodata');
        }

        $biodata_saya->handphone = $request->handphone;
        $biodata_saya->save();

        return redirect('/ubah-nohp')->with('Sukses', 'No HP berhasil diubah');
    }
}
