<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kuliahs';
    protected $fillable = [
        'kode_mk', 'mata_kuliah', 'sks', 'kelas', 'nidn_dosen', 
        'nama_dosen', 'ruang_waktu', 'keterangan', 'kode_teams', 'email_dosen'
    ];
    public $timestamps = false;
}