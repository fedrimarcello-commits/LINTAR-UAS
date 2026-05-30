<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    
    protected $table = 'kehadirans';
    public $timestamps = false;
    protected $fillable = [
        'nim',
        'kode_mk',
        'nama_mk',
        'kelas',
        'jumlah_pertemuan',
        'jumlah_kehadiran'
    ];
}