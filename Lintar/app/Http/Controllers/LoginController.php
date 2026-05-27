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

        if (strlen($request->password) < 8) {
            return redirect('/register')->with('Errorp', 'Password harus minimal 8 karakter');
        }
        
        $email_sama = \App\Models\User::where('email', $request->email)->first();
        
        if ($email_sama != null) {
            return redirect('/register')->with('Errorp', 'Email tersebut sudah terdaftar!');
        }

        $user_baru = new User();
        $user_baru->name = $request->nama;
        $user_baru->email = $request->email;
        $user_baru->password = $request->password;
        $user_baru->save();

        //Data Nilai ini adalah ada dummy yang langsung dibuat untuk jadi contoh Demo saja, karena siswa tidak input nilai
        $nilai1 = new \App\Models\NilaiUts(); 
        $nilai1->nama_mahasiswa = $request->nama; 
        $nilai1->kode_mk = 'TK13034';
        $nilai1->nama_mk = 'OPERATING SYSTEMS';
        $nilai1->sks = 2;
        $nilai1->nilai = '90.00';
        $nilai1->save();

        $nilai2 = new \App\Models\NilaiUts();
        $nilai2->nama_mahasiswa = $request->nama; 
        $nilai2->kode_mk = 'TK23007';
        $nilai2->nama_mk = 'DATA STRUCTURES';
        $nilai2->sks = 4;
        $nilai2->nilai = '70.00';
        $nilai2->save();

        $nilai3 = new \App\Models\NilaiUts();
        $nilai3->nama_mahasiswa = $request->nama; 
        $nilai3->kode_mk = 'TK13030';
        $nilai3->nama_mk = 'NUMERICAL METHOD';
        $nilai3->sks = 4;
        $nilai3->nilai = null;
        $nilai3->save();

        $nilai4 = new \App\Models\NilaiUts();
        $nilai4->nama_mahasiswa = $request->nama; 
        $nilai4->kode_mk = 'TK13038';
        $nilai4->nama_mk = 'ALGEBRA & DISCRETE MATHEMATICS';
        $nilai4->sks = 4;
        $nilai4->nilai = '85.00';
        $nilai4->save();

        $nilai5 = new \App\Models\NilaiUts();
        $nilai5->nama_mahasiswa = $request->nama; 
        $nilai5->kode_mk = 'TK13039';
        $nilai5->nama_mk = 'INTRODUCTION TO ARTIFICIAL INTELLIGENCE';
        $nilai5->sks = 2;
        $nilai5->nilai = '85.00';
        $nilai5->save();

        $nilai6 = new \App\Models\NilaiUts();
        $nilai6->nama_mahasiswa = $request->nama; 
        $nilai6->kode_mk = 'TK23022';
        $nilai6->nama_mk = 'BACK-END PROGRAMMING';
        $nilai6->sks = 4;
        $nilai6->nilai = '87.00';
        $nilai6->save();

        return redirect('/login')->with('Sukses', 'Akun berhasil dibuat, Silakan login');
    }

    public function lihatNilaiUTS()
    {
        if (session('user_aktif') == null) {
            return redirect('/login');
        }
        $nama_login = session('user_aktif');
        $semua_nilai = \App\Models\NilaiUts::all();

        $nilai_saya = [];
        foreach ($semua_nilai as $item) {
            if ($item->nama_mahasiswa == $nama_login) {
            $nilai_saya[] = $item;
            }
        }
        return view('nilai-uts', ['data_nilai' => $nilai_saya]);
    }
}