## Fitur
Mahasiswa
- Registrasi dan Login (dengan peran Mahasiswa/Dosen)
- Halaman Utama
- Akademik: Nilai UTS, Nilai KHS, Kehadiran, Status Kuliah, Kalender Akademik, Jadwal Kuliah, Kartu Studi Mahasiswa (KSM)
- Biodata: Isi Biodata, Lengkapi Data, Ubah No HP, Ubah Password
- Beasiswa: Daftar Beasiswa, Status Daftar, Info Hasil, Upload Berkas, Surat Perjanjian (dengan pengecekan syarat otomatis)
- Beasiswa Eksternal: Laporan Beasiswa
- Konsultasi PA (kirim, lihat riwayat, dan hapus pesan)
- Konsultasi Psikologi
- Bahan Ajar

Dosen
- Login sebagai Dosen
- Input Nilai UTS, Nilai KHS, dan Kehadiran mahasiswa

## Cara Menjalankan
1. Clone/salin project ini, lalu masuk ke folder project.

2. Install dependency:
   composer install

3. Salin file `.env`:
   cp .env.example .env

4. Buat application key:
   php artisan key:generate

5. Buat database baru bernama `lintar_db` di MySQL, lalu sesuaikan pengaturan database di file `.env`:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=lintar_db
    DB_USERNAME=root
    DB_PASSWORD=

6. Jalankan migrasi dan seeder:
   php artisan migrate
   php artisan db:seed

7. Jalankan server:
   php artisan serve
   Lalu buka `http://localhost:8000/login` di browser.

## Akun Dummy untuk dosen
Dosen
- Email: `dosen@untar.com`
- Password: `dosen123`

