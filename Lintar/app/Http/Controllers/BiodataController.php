<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\User;

class BiodataController extends Controller
{
    public function lihatBiodata()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');
        $semua_biodata = Biodata::all();

        $biodata_saya = new Biodata();
        foreach ($semua_biodata as $item) {
            if ($item->nim == $nim_login) {
                $biodata_saya = $item;
            }
        }

        $email_saya = '';
        $semua_user = User::all();
        foreach ($semua_user as $user) {
            if ($user->nim == $nim_login) {
                $email_saya = $user->email;
            }
        }

        return view('biodata', ['data' => $biodata_saya, 'email' => $email_saya]);
    }

    public function isiBiodata()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');
        $semua_biodata = Biodata::all();

        $sudah_ada = false;
        foreach ($semua_biodata as $item) {
            if ($item->nim == $nim_login) {
                $sudah_ada = true;
            }
        }

        if ($sudah_ada == true) {
            return redirect('/biodata');
        }

        return view('biodata_isi');
    }

    public function simpanBiodata(Request $request)
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');
        $semua_biodata = Biodata::all();

        $sudah_ada = false;
        foreach ($semua_biodata as $item) {
            if ($item->nim == $nim_login) {
                $sudah_ada = true;
            }
        }

        if ($sudah_ada == true) {
            return redirect('/biodata');
        }

        $biodata_baru = new Biodata();
        $biodata_baru->nim = $nim_login;
        $biodata_baru->no_rekening = $request->no_rekening;
        $biodata_baru->tempat_lahir = $request->tempat_lahir;
        $biodata_baru->tanggal_lahir = $request->tanggal_lahir;
        $biodata_baru->jenis_kelamin = $request->jenis_kelamin;
        $biodata_baru->agama = $request->agama;
        $biodata_baru->alamat = $request->alamat;
        $biodata_baru->telepon = $request->telepon;
        $biodata_baru->handphone = $request->handphone;
        $biodata_baru->asal_sekolah = $request->asal_sekolah;
        $biodata_baru->no_ijazah = $request->no_ijazah;
        $biodata_baru->tgl_ijazah = $request->tgl_ijazah;
        $biodata_baru->nama_ortu = $request->nama_ortu;
        $biodata_baru->alamat_ortu = $request->alamat_ortu;
        $biodata_baru->telepon_ortu = $request->telepon_ortu;
        $biodata_baru->save();

        return redirect('/biodata');
    }
}
