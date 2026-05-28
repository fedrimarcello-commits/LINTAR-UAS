<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KalenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kalenders')->insert([

            [
                'tanggal' => '08 Jun 2026 s/d 17 Jul 2026',
                'keterangan' => 'Pengajuan Permohonan Pindah Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '08 Jun 2026 s/d 17 Jul 2026',
                'keterangan' => 'Pengajuan Permohonan Aktif Kuliah Kembali Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '08 Jun 2026 s/d 09 Jul 2026',
                'keterangan' => 'Pembayaran BPP (kelas Pagi) Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '09 Jun 2026 s/d 09 Jul 2026',
                'keterangan' => 'Pembayaran Uang Kuliah Tunggal/UKT (kls sore) Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '20 Jul 2026 s/d 14 Aug 2026',
                'keterangan' => 'Pengajuan Permohonan Cuti Akademik Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '20 Jul 2026 s/d 07 Aug 2026',
                'keterangan' => 'Rencana Registrasi Studi/Perbaikan (RRS) Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '18 Aug 2026 s/d 02 Oct 2026',
                'keterangan' => 'Proses Pembelajaran Sebelum UTS'
            ],

            [
                'tanggal' => '18 Aug 2026 s/d 02 Oct 2026',
                'keterangan' => 'Permohonan Dispensasi Cuti Akademik Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '25 Aug 2026 s/d 23 Sep 2026',
                'keterangan' => 'Pembayaran SKS (kls pagi) Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '28 Sep 2026 s/d 02 Oct 2026',
                'keterangan' => 'Cetak Kartu Studi Mahasiswa (KSM)'
            ],

            [
                'tanggal' => '05 Oct 2026 s/d 09 Oct 2026',
                'keterangan' => 'Ujian Tengah Semester (UTS) Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '12 Oct 2026 s/d 27 Nov 2026',
                'keterangan' => 'Proses Pembelajaran Setelah UTS'
            ],

            [
                'tanggal' => '30 Nov 2026 s/d 11 Dec 2026',
                'keterangan' => 'Ujian Akhir Semester (UAS) Semester Ganjil 2026/2027'
            ],

            [
                'tanggal' => '02 Dec 2026 s/d 17 Dec 2026',
                'keterangan' => 'Remedial'
            ]

        ]);
    }
}
