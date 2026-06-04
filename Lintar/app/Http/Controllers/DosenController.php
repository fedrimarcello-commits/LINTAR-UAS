<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiUts;
use App\Models\NilaiKhs;
use App\Models\Kehadiran;

class DosenController extends Controller
{
    public function menuDosen()
    {
        if (session('peran_aktif') != 'dosen') {
            return redirect('/login');
        }

        $nama_dosen = session('user_aktif');
        return view('menu_dosen', ['nama' => $nama_dosen]);
    }

    public function inputUts()
    {
        if (session('peran_aktif') != 'dosen') {
            return redirect('/login');
        }

        return view('dosen_uts');
    }

    public function simpanUts(Request $request)
    {
        if (session('peran_aktif') != 'dosen') {
            return redirect('/login');
        }

        $semua_nilai = NilaiUts::all();

        $ketemu = false;
        foreach ($semua_nilai as $item) {
            if ($item->nim == $request->nim && $item->kode_mk == $request->kode_mk) {
                $item->nilai = $request->nilai;
                $item->save();
                $ketemu = true;
            }
        }

        if ($ketemu == false) {
            return redirect('/dosen/uts')->with('Pesan', 'NIM atau Kode MK tidak ditemukan!');
        }

        return redirect('/dosen/uts')->with('Pesan', 'Nilai UTS berhasil disimpan');
    }

    public function inputKhs()
    {
        if (session('peran_aktif') != 'dosen') {
            return redirect('/login');
        }

        return view('dosen_khs');
    }

    public function simpanKhs(Request $request)
    {
        if (session('peran_aktif') != 'dosen') {
            return redirect('/login');
        }

        $semua_khs = NilaiKhs::all();

        $ketemu = false;
        foreach ($semua_khs as $item) {
            if ($item->nim == $request->nim && $item->kode_mk == $request->kode_mk) {
                $item->nilai_huruf = $request->nilai_huruf;
                $item->nilai_angka = $request->nilai_angka;
                $item->bobot_kualitas = $item->sks * $request->nilai_angka;
                $item->save();
                $ketemu = true;
            }
        }

        if ($ketemu == false) {
            return redirect('/dosen/khs')->with('Pesan', 'NIM atau Kode MK tidak ditemukan!');
        }

        return redirect('/dosen/khs')->with('Pesan', 'Nilai KHS berhasil disimpan');
    }

    public function inputKehadiran()
    {
        if (session('peran_aktif') != 'dosen') {
            return redirect('/login');
        }

        return view('dosen_kehadiran');
    }

    public function simpanKehadiran(Request $request)
    {
        if (session('peran_aktif') != 'dosen') {
            return redirect('/login');
        }

        $semua_kehadiran = Kehadiran::all();

        $ketemu = false;
        foreach ($semua_kehadiran as $item) {
            if ($item->nim == $request->nim && $item->kode_mk == $request->kode_mk) {
                $item->jumlah_pertemuan = $request->jumlah_pertemuan;
                $item->jumlah_kehadiran = $request->jumlah_kehadiran;
                $item->save();
                $ketemu = true;
            }
        }

        if ($ketemu == false) {
            return redirect('/dosen/kehadiran')->with('Pesan', 'NIM atau Kode MK tidak ditemukan!');
        }

        return redirect('/dosen/kehadiran')->with('Pesan', 'Kehadiran berhasil disimpan');
    }
}
