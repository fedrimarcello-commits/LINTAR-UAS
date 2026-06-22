<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konsultasi_pas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->text('isi');
            $table->string('waktu');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('konsultasi_pas');
    }
};
