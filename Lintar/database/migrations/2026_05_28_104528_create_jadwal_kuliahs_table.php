<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk');
            $table->string('mata_kuliah');
            $table->integer('sks');
            $table->string('kelas');
            $table->string('nidn_dosen');
            $table->string('nama_dosen');
            $table->text('ruang_waktu'); 
            $table->string('keterangan')->default('Teori');
            $table->string('kode_teams')->nullable();
            $table->string('email_dosen');
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliahs');
    }
};