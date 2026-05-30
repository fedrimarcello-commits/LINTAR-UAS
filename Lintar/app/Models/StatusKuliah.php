<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKuliah extends Model
{
    use HasFactory;

    protected $table = 'status_kuliahs';
    public $timestamps = false;

    protected $fillable = [
        'nim', 'th_akademik', 'status', 'sks_ambil', 'sks_peroleh',
        'ips', 'sks_ambil_kumulatif', 'sks_peroleh_kumulatif', 'ipk'
    ];
}