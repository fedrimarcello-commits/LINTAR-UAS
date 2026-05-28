<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nilai_khs', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('kode_mk');
            $table->string('nama_mk');
            $table->string('status');
            $table->integer('sks');
            $table->string('nilai_huruf')->nullable();
            $table->string('nilai_angka')->nullable();
            $table->string('bobot_kualitas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_khs');
    }
};
