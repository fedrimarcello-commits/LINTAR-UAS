<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    protected $fillable = [
        'tanggal',
        'keterangan'
    ];
    public $timestamps = false;
}
