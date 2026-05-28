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
    Schema::create('status_kuliahs', function (Blueprint $table) {
        $table->id();
        $table->string('th_akademik');
        $table->string('status');
        $table->integer('sks_ambil');
        $table->integer('sks_peroleh');
        $table->float('ips'); 
        $table->integer('sks_ambil_kumulatif');
        $table->integer('sks_peroleh_kumulatif');
        $table->float('ipk'); 
        $table->timestamps();
    });
}
};
