<!DOCTYPE html>
<html>
<head>
    <title>KARTU HASIL STUDI</title>
</head>
<body>

    <h2>KARTU HASIL STUDI</h2>
    <h3>Semester : Genap 2025 / 2026</h3>
    <p>Nama Mahasiswa : {{ session('user_aktif') }}</p>

    <table border="1">
        <tr>
            <th>Cek</th>
            <th>NO</th>
            <th>KODE MK</th>
            <th>NAMA MATA KULIAH</th>
            <th>STATUS</th>
            <th>KREDIT(sks)</th>
            <th>NILAI(Huruf)</th>
            <th>NILAI(Angka)</th>
            <th>BOBOT KUALITAS(sksN)</th>
            <th>KET.</th>
        </tr>

        @foreach($data_khs as $item)
        <tr>
            <td><input type="radio"></td>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kode_mk }}</td>
            <td>{{ $item->nama_mk }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->sks }}</td>
            <td>{{ $item->nilai_huruf }}</td>
            <td>{{ $item->nilai_angka }}</td>
            <td>{{ $item->bobot_kualitas }}</td>
            <td></td>
        </tr>
        @endforeach
        
        <tr>
            <td colspan="5">JUMLAH</td>
            <td>{{ $total_sks }}</td>
            <td colspan="2"></td>
            <td>{{ $total_bobot }}</td>
            <td></td>
        </tr>
    </table>

    <br>
    <p>* : Menunggu Proses di Biro Adak</p>

    <table border="1">
        <tr>
            <th colspan="2">HASIL STUDI SEMESTER DIPEROLEH</th>
            <th colspan="3">HASIL STUDI KUMULATIF</th>
        </tr>
        <tr>
            <th>JML SKS</th>
            <th>IPS</th>
            <th>KREDIT DIAMBIL</th>
            <th>KREDIT PEROLEH</th>
            <th>IPK</th>
        </tr>
        <tr>
            <td>{{ $total_sks }}</td>
            <td>{{ $ips }}</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
        </tr>
    </table>

    <br>
    <a href="/menu">Kembali ke Menu Utama</a>

</body>
</html>