<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusKuliah;
use App\Models\Biodata;

class UnggahFileController extends Controller
{
    public function lihatUnggahFile()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $nim_login = session('nim_aktif');

        $semua_status = StatusKuliah::all();
        $status_saya = [];
        foreach ($semua_status as $item) {
            if ($item->nim == $nim_login) {
                $status_saya[] = $item;
            }
        }

        $status_aktif = false;
        $ipk = 0;
        if (count($status_saya) > 0) {
            $terakhir = $status_saya[count($status_saya) - 1];
            if ($terakhir->status == 'Aktif') {
                $status_aktif = true;
            }
            $ipk = $terakhir->ipk;
        }
        $jumlah_semester = count($status_saya);

        $semua_biodata = Biodata::all();
        $sudah_biodata = false;
        foreach ($semua_biodata as $item) {
            if ($item->nim == $nim_login) {
                $sudah_biodata = true;
            }
        }

        $syarat = [];
        if ($status_aktif == false) {
            $syarat[] = 'Berstatus "Aktif" pada semester berjalan';
        }
        if ($jumlah_semester < 3) {
            $syarat[] = 'Masa Aktif Belum memenuhi minimal 3 Semester';
        }
        if ($ipk < 3.00) {
            $syarat[] = 'IPK tidak memenuhi >= 3.00';
        }
        if ($sudah_biodata == false) {
            $syarat[] = 'Belum mengisi biodata';
        }

        return view('unggah_file', ['syarat' => $syarat]);
    }
}
