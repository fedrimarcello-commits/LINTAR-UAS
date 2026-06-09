<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LengkapiDataController extends Controller
{
    public function lengkapiData()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }

        return view('lengkapi_data');
    }
}
