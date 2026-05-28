<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UtsController;
use App\Http\Controllers\KhsController;

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
                session(['user_aktif' => $user->name, 'nim_aktif' => $user->nim]);
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

        if (strlen($request->password) < 8) {
            return redirect('/register')->with('Errorp', 'Password harus minimal 8 karakter');
        }
        
        $email_sama = \App\Models\User::where('email', $request->email)->first();
        
        if ($email_sama != null) {
            return redirect('/register')->with('Errorp', 'Email tersebut sudah terdaftar!');
        }
        
        $nim_sama = \App\Models\User::where('nim', $request->nim)->first();

        if ($nim_sama != null) {
            return redirect('/register')->with('Errorp', 'NIM sudah ada!');
        }

        $user_baru = new User();
        $user_baru->nim = $request->nim;
        $user_baru->name = $request->nama;
        $user_baru->email = $request->email;
        $user_baru->password = $request->password;
        $user_baru->save();

        UtsController::membuatNilaiUTS($request->nim);
        KhsController::membuatNilaiKHS($request->nim);
        KehadiranController::membuatKehadiran($request->nim);
        StatusKuliahController::membuatStatusKuliah($request->nim);

        return redirect('/login')->with('Sukses', 'Akun berhasil dibuat, Silakan login');
    }
}