<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusKuliah;

class StatusKuliahController extends Controller
{
    public function lihatStatusKuliah()
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

        return view('status_kuliah', ['data_status' => $status_saya]);
    }

    //Data status kuliah dummy yang langsung dibuat saat register, cuma untuk demo
    public static function membuatStatusKuliah($nim)
    {
        $data_status = [
            ['th_akademik' => 'Gasal 2025', 'status' => 'Aktif', 'sks_ambil' => 20, 'sks_peroleh' => 20, 'ips' => 3.75, 'sks_ambil_kumulatif' => 20, 'sks_peroleh_kumulatif' => 20, 'ipk' => 3.75],
            ['th_akademik' => 'Genap 2025', 'status' => 'Aktif', 'sks_ambil' => 20, 'sks_peroleh' => 0, 'ips' => 0, 'sks_ambil_kumulatif' => 0, 'sks_peroleh_kumulatif' => 0, 'ipk' => 0]
        ];

        foreach ($data_status as $row) {
            $status = new StatusKuliah();
            $status->nim = $nim;
            $status->th_akademik = $row['th_akademik'];
            $status->status = $row['status'];
            $status->sks_ambil = $row['sks_ambil'];
            $status->sks_peroleh = $row['sks_peroleh'];
            $status->ips = $row['ips'];
            $status->sks_ambil_kumulatif = $row['sks_ambil_kumulatif'];
            $status->sks_peroleh_kumulatif = $row['sks_peroleh_kumulatif'];
            $status->ipk = $row['ipk'];
            $status->save();
        }
    }
}
