<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function tampilkanLogin()
    {
        return view('login'); 
    }

    public function prosesLogin(Request $request)
    {
        $semua_user = User::all();

        foreach ($semua_user as $user) {
            if ($user->email == $request->email && Hash::check($request->password, $user->password)) {
                session(['user_aktif' => $user->name]);
                return redirect('/menu'); 
            }
        }
        return redirect('/login')->with('Error', 'Email atau password salah!'); 
    }

    public function menuUtama()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }
        
        $nama_user = session('user_aktif');
        return view('menu', ['nama' => $nama_user]);
    }

    public function logout()
    {
        session(['user_aktif' => null]);
        return redirect('/login');
    }

    public function tampilkanRegister()
    {
        return view('register');
    }

    public function prosesRegister(Request $request)
    {
        $user_baru = new User();
        $user_baru->name = $request->nama;
        $user_baru->email = $request->email;
        $user_baru->password = $request->password;
        $user_baru->save();

        return redirect('/login')->with('Sukses', 'Akun berhasil dibuat, Silakan login');
    }
}