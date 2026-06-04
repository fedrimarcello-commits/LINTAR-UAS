<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UtsController;
use App\Http\Controllers\KhsController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\StatusKuliahController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'tampilkanLogin']);
Route::post('/login', [LoginController::class, 'prosesLogin']);

Route::get('/menu', [LoginController::class, 'menuUtama']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [LoginController::class, 'tampilkanRegister']);
Route::post('/register', [LoginController::class, 'prosesRegister']);

Route::get('/nilai-uts', [UtsController::class, 'lihatNilaiUTS']);

Route::get('/nilai-khs', [KhsController::class, 'lihatKHS']);

Route::get('/kehadiran', [KehadiranController::class, 'lihatKehadiran']);

Route::get('/status-kuliah', [StatusKuliahController::class, 'lihatStatusKuliah']);

Route::get('/kalender', [KalenderController::class, 'lihatKalender']);
Route::get('/jadwal', [JadwalKuliahController::class, 'lihatJadwal']);

Route::get('/dosen', [DosenController::class, 'menuDosen']);

Route::get('/dosen/uts', [DosenController::class, 'inputUts']);
Route::post('/dosen/uts', [DosenController::class, 'simpanUts']);

Route::get('/dosen/khs', [DosenController::class, 'inputKhs']);
Route::post('/dosen/khs', [DosenController::class, 'simpanKhs']);

Route::get('/dosen/kehadiran', [DosenController::class, 'inputKehadiran']);
Route::post('/dosen/kehadiran', [DosenController::class, 'simpanKehadiran']);
