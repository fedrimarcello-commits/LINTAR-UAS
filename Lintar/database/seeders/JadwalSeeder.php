<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JadwalKuliah;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kode_mk' => 'TK13030',
                'mata_kuliah' => 'NUMERICAL METHOD',
                'sks' => 4,
                'kelas' => 'A',
                'nidn_dosen' => '10189013',
                'nama_dosen' => 'DYAH ERNY HERWINDIATI, Prof., Ir., M.Si, Dr.',
                'ruang_waktu' => "R1007 /\nKAMIS(13:30 s/d 15:10)",
                'keterangan' => 'Teori',
                'kode_teams' => 'srxv1vz',
                'email_dosen' => 'dyahh@fti.untar.ac.id',
            ],
            [
                'kode_mk' => 'TK13030',
                'mata_kuliah' => 'NUMERICAL METHOD',
                'sks' => 4,
                'kelas' => 'A',
                'nidn_dosen' => '10812001',
                'nama_dosen' => 'JANSON HENDRYLI, S. Kom. M.Kom.',
                'ruang_waktu' => "R0902 /\nKAMIS(15:30 s/d 17:10)",
                'keterangan' => 'Teori',
                'kode_teams' => 'srxv1vz',
                'email_dosen' => 'jansonh@fti.untar.ac.id',
            ],
            [
                'kode_mk' => 'TK13034',
                'mata_kuliah' => 'OPERATING SYSTEMS',
                'sks' => 2,
                'kelas' => 'A',
                'nidn_dosen' => '10811001',
                'nama_dosen' => 'RIFKY KURNIAWAN., S.Kom',
                'ruang_waktu' => "R0902 /\nKAMIS(07:30 s/d 09:10)",
                'keterangan' => 'Teori',
                'kode_teams' => '8w9o9yz',
                'email_dosen' => 'rifkyk@fti.untar.ac.id',
            ],
            [
                'kode_mk' => 'TK13038',
                'mata_kuliah' => 'ALGEBRA & DISCRETE MATHEMATICS',
                'sks' => 4,
                'kelas' => 'A',
                'nidn_dosen' => '10301015',
                'nama_dosen' => 'LELY HIRYANTO, ST., M.Sc.,Ph.D.',
                'ruang_waktu' => "R0701 /\nSENIN(07:30 s/d 09:10)\nSENIN(09:30 s/d 11:10)",
                'keterangan' => 'Teori',
                'kode_teams' => 'mrexh2m',
                'email_dosen' => 'lelyh@fti.untar.ac.id',
            ],
            [
                'kode_mk' => 'TK13039',
                'mata_kuliah' => 'INTRODUCTION TO ARTIFICIAL INTELLIGENCE',
                'sks' => 2,
                'kelas' => 'A',
                'nidn_dosen' => '10813003',
                'nama_dosen' => 'MANATAP DOLOK LAURO, S.Kom., M.M.S.I.',
                'ruang_waktu' => "R0701 /\nJUMAT(09:30 s/d 11:10)",
                'keterangan' => 'Teori',
                'kode_teams' => 'r3gi21j',
                'email_dosen' => 'manataps@fti.untar.ac.id',
            ],
            [
                'kode_mk' => 'TK23007',
                'mata_kuliah' => 'DATA STRUCTURES',
                'sks' => 4,
                'kelas' => 'A',
                'nidn_dosen' => '10390001',
                'nama_dosen' => 'JEANNY PRAGANTHA, Ir., M.Eng',
                'ruang_waktu' => "R0901 /\nSELASA(07:30 s/d 09:10)\nR0902 /\nSELASA(13:30 s/d 15:10)",
                'keterangan' => 'Teori',
                'kode_teams' => 'mml0326',
                'email_dosen' => 'jeannyp@fti.untar.ac.id',
            ],
            [
                'kode_mk' => 'TK23022',
                'mata_kuliah' => 'BACK-END PROGRAMMING',
                'sks' => 4,
                'kelas' => 'A',
                'nidn_dosen' => '10812001',
                'nama_dosen' => 'JANSON HENDRYLI, S. Kom. M.Kom.',
                'ruang_waktu' => "R0902 /\nRABU(09:30 s/d 11:10)\nR1007 /\nRABU(07:30 s/d 09:10)",
                'keterangan' => 'Teori',
                'kode_teams' => '9b0o4vw',
                'email_dosen' => 'jansonh@fti.untar.ac.id',
            ],
        ];

        foreach ($data as $value) {
            JadwalKuliah::create($value);
        }
    }
}