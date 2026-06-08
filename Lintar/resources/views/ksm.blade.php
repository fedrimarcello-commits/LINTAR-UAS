<!DOCTYPE html>
<html>
<head>
    <title>Kartu Studi Mahasiswa</title>
</head>
<body>
    <p>
        Biro Administrasi Akademik <br>
        Universitas Tarumanagara <br>
        Jl. Let. Jend. S. Parman No.1 Jakarta 11440 <br>
        Tlp. (021)5671747 (Hunting) Fax: (021)5604478
    </p>

    <h2>KARTU STUDI MAHASISWA (KSM)</h2>

    <p>
        Nama : {{ session('user_aktif') }} <br>
        No. Pokok Mahasiswa : {{ session('nim_aktif') }} <br>
        Fak./Prog. Studi : TEKNIK INFORMATIKA <br>
        Semester : Genap <br>
        Tahun Akademik : 2025 / 2026
    </p>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Kode M.K</th>
            <th>Nama Mata Kuliah</th>
            <th>sks</th>
            <th>Kls</th>
            <th>Status</th>
            <th>Paraf Pengawas UAS</th>
        </tr>

        @foreach($data_matkul as $index => $mk)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td>A</td>
            <td>{{ $mk->status }}</td>
            <td></td>
        </tr>
        @endforeach

        <tr>
            <td colspan="3">JUMLAH SKS</td>
            <td>{{ $total_sks }}</td>
            <td colspan="3"></td>
        </tr>
    </table>
    <br>

    <p>
        &gt;&gt; Catatan &lt;&lt; <br>
        1. Telitilah Mata Kuliah & Kelas yang tercantum pd KSM ini <br>
        2. Apabila terdapat kesalahan, kekurangan/kelebihan sks harap lapor ke Biro Adak masing-masing kampus dengan membawa fotocopy KRRS/KSS <br>
        3. KSM ini berlaku sebagai tanda mengikuti UTS, UAS dan Ujian Skripsi/Tugas Akhir/Tesis/Desertasi <br>
        4. Informasi Akademik OnLine dapat diakses melalui https://lintar.untar.ac.id
    </p>

    <p>
        Jakarta, 08 Juni 2026 <br>
        KETUA LEMBAGA PEMBELAJARAN <br><br>
        TTD <br><br>
        Dr. Ir. Steven Darmawan, S.T., M.T.
    </p>

    <a href="/menu">Kembali ke Menu Utama</a>
</body>
</html>
