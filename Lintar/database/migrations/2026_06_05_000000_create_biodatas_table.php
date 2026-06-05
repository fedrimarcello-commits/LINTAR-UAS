<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('no_rekening')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('handphone')->nullable();
            $table->string('email')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('no_ijazah')->nullable();
            $table->string('tgl_ijazah')->nullable();
            $table->string('nama_ortu')->nullable();
            $table->string('alamat_ortu')->nullable();
            $table->string('telepon_ortu')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
