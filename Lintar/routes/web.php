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
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\NoHpController;
use App\Http\Controllers\KsmController;
use App\Http\Controllers\LengkapiDataController;
use App\Http\Controllers\LaporanBeasiswaController;
use App\Http\Controllers\BahanAjarController;
use App\Http\Controllers\KonsultasiPaController;
use App\Http\Controllers\KonsultasiPsikologiController;
use App\Http\Controllers\SuratPerjanjianController;
use App\Http\Controllers\DaftarBeasiswaController;
use App\Http\Controllers\StatusDaftarController;
use App\Http\Controllers\LihatHasilController;
use App\Http\Controllers\UnggahFileController;
use App\Http\Controllers\HalamanUtamaController;

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

Route::get('/biodata', [BiodataController::class, 'lihatBiodata']);
Route::get('/biodata/isi', [BiodataController::class, 'isiBiodata']);
Route::post('/biodata/isi', [BiodataController::class, 'simpanBiodata']);
Route::get('/ubah-nohp', [NoHpController::class, 'ubahNoHp']);
Route::post('/ubah-nohp', [NoHpController::class, 'simpanNoHp']);

Route::get('/ksm', [KsmController::class, 'lihatKsm']);

Route::get('/lengkapi-data', [LengkapiDataController::class, 'lengkapiData']);

Route::get('/laporan-beasiswa', [LaporanBeasiswaController::class, 'lihatBeasiswa']);

Route::get('/ubah-password', [LoginController::class, 'tampilkanUbahPassword']);
Route::post('/ubah-password', [LoginController::class, 'prosesUbahPassword']);

Route::get('/dosen', [DosenController::class, 'menuDosen']);

Route::get('/dosen/uts', [DosenController::class, 'inputUts']);
Route::post('/dosen/uts', [DosenController::class, 'simpanUts']);

Route::get('/dosen/khs', [DosenController::class, 'inputKhs']);
Route::post('/dosen/khs', [DosenController::class, 'simpanKhs']);

Route::get('/dosen/kehadiran', [DosenController::class, 'inputKehadiran']);
Route::post('/dosen/kehadiran', [DosenController::class, 'simpanKehadiran']);

Route::get('/bahan-ajar', [BahanAjarController::class, 'lihatBahanAjar']);

Route::get('/konsultasi-pa', [KonsultasiPaController::class, 'lihatKonsultasiPa']);
Route::post('/konsultasi-pa', [KonsultasiPaController::class, 'kirimPesan']);
Route::post('/konsultasi-pa/hapus', [KonsultasiPaController::class, 'hapusPesan']);

Route::get('/konsultasi-psikologi', [KonsultasiPsikologiController::class, 'lihatKonsultasiPsikologi']);

Route::get('/surat-perjanjian', [SuratPerjanjianController::class, 'lihatSuratPerjanjian']);

Route::get('/daftar-beasiswa', [DaftarBeasiswaController::class, 'lihatDaftarBeasiswa']);

Route::get('/status-daftar', [StatusDaftarController::class, 'lihatStatusDaftar']);

Route::get('/lihat-hasil', [LihatHasilController::class, 'lihatHasil']);

Route::get('/unggah-file', [UnggahFileController::class, 'lihatUnggahFile']);

Route::get('/halaman-utama', [HalamanUtamaController::class, 'lihatHalamanUtama']);