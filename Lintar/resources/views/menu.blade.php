<!DOCTYPE html>
<html>
<head>
    <title>Lintar MAHASISWA</title>
</head>
<body>
    <h1>Halaman Utama</h1>
    <h2>{{ $nama }}</h2>

    <p><a href="/halaman-utama">Halaman Utama</a></p>

    <details>
        <summary>Akademik</summary>
        <ul>
            <li><a href="/jadwal">Jadwal Kuliah</a></li>
            <li><a href="/kalender">Kalender Akademik</a></li>
            <li><a href="/ksm">Kartu Studi Mahasiswa</a></li>
            <li><a href="/kehadiran">Kehadiran</a></li>
            <li><a href="/nilai-khs">Nilai KHS</a></li>
            <li><a href="/nilai-uts">Nilai UTS</a></li>
            <li><a href="/status-kuliah">Status Kuliah</a></li>
        </ul>
    </details>

    <details>
        <summary>Beasiswa</summary>
        <ul>
            <li><a href="/daftar-beasiswa">1.Daftar Beasiswa</a></li>
            <li><a href="/biodata">2.Biodata</a></li>
            <li><a href="/status-daftar">3.Status Daftar</a></li>
            <li><a href="/lihat-hasil">4.Info Hasil</a></li>
            <li><a href="/unggah-file">5.Upload Berkas</a></li>
            <li><a href="/surat-perjanjian">6.Surat Perjanjian & PKM</a></li>
        </ul>
    </details>

    <details>
        <summary>Beasiswa Eksternal</summary>
        <ul>
            <li><a href="/laporan-beasiswa">Laporan Beasiswa</a></li>
        </ul>
    </details>

    <details>
        <summary>Biodata</summary>
        <ul>
            <li><a href="/biodata">Biodata</a></li>
            <li><a href="/lengkapi-data">Lengkapi Data</a></li>
            <li><a href="/ubah-nohp">Ubah No Hp</a></li>
            <li><a href="/ubah-password">Ubah Password</a></li>
        </ul>
    </details>

    <details>
        <summary>Cuti Online</summary>
    </details>

    <details>
        <summary>Konsuling PA</summary>
        <ul>
            <li><a href="/konsultasi-pa">Konsultasi</a></li>
        </ul>
    </details>

    <details>
        <summary>Konsultasi Psikologi</summary>
        <ul>
            <li><a href="/konsultasi-psikologi">Konsultasi</a></li>
        </ul>
    </details>

    <details>
        <summary>KRRS ONLINE</summary>
    </details>

    <details>
        <summary>Layanan Mahasiswa</summary>
    </details>

    <details>
        <summary>MBKM</summary>
    </details>

    <details>
        <summary>Perkuliahan</summary>
        <ul>
            <li><a href="/bahan-ajar">03.Bahan Ajar</a></li>
        </ul>
    </details>

    <details>
        <summary>Perpustakaan</summary>
    </details>

    <details>
        <summary>Registrasi</summary>
    </details>

    <details>
        <summary>Remedial</summary>
    </details>

    <details>
        <summary>SKPI</summary>
    </details>

    <details>
        <summary>Tugas Akhir</summary>
    </details>

    <details>
        <summary>Uang Kuliah</summary>
    </details>

    <details>
        <summary>UAS Online</summary>
    </details>

    <details>
        <summary>UTS Online</summary>
    </details>

    <details>
        <summary>Wisuda</summary>
    </details>

    <details>
        <summary>Yudisium Online</summary>
    </details>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
