<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NilaiUts;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'nim' => '20260001',
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $dosen = new User();
        $dosen->nim = '0';
        $dosen->name = 'Dosen';
        $dosen->email = 'dosen@untar.com';
        $dosen->password = 'dosen123';
        $dosen->peran = 'dosen';
        $dosen->save();


        $this->call([
            KalenderSeeder::class,
            JadwalSeeder::class
        ]);
    }
}