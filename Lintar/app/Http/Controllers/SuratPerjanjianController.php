<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratPerjanjianController extends Controller
{
    public function lihatSuratPerjanjian()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }
        return view('surat_perjanjian');
    }
}
