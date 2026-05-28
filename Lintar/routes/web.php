<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KhsController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'tampilkanLogin']);
Route::post('/login', [LoginController::class, 'prosesLogin']);

Route::get('/menu', [LoginController::class, 'menuUtama']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [LoginController::class, 'tampilkanRegister']);
Route::post('/register', [LoginController::class, 'prosesRegister']);

Route::get('/nilai-uts', [NilaiController::class, 'lihatNilaiUTS']);

Route::get('/nilai-khs', [KhsController::class, 'lihatKHS']);