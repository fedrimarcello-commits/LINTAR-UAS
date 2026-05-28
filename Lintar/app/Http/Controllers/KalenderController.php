<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kalender;

class KalenderController extends Controller
{
    public function lihatKalender()
    {
        $kalender = Kalender::all();

        return view('kalender', compact('kalender'));
    }
}
