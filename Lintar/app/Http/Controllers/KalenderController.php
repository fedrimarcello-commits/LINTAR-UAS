<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kalender;

class KalenderController extends Controller
{
    public function lihatKalender()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        $kalender = Kalender::all();

        return view('kalender', ['kalender' => $kalender]);
    }
}
