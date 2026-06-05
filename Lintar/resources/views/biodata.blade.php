<!DOCTYPE html>
<html>
<head>
    <title>Biodata Mahasiswa</title>
</head>
<body>
    <h2>Biodata Mahasiswa</h2>

    <table border="1" cellspacing="0" cellpadding="5" width="500">
        <tr>
            <th colspan="2">DATA MAHASISWA</th>
        </tr>
        <tr>
            <td>NPM</td>
            <td>{{ session('nim_aktif') }}</td>
        </tr>
        <tr>
            <td>NAMA MAHASISWA</td>
            <td>{{ session('user_aktif') }}</td>
        </tr>
        <tr>
            <td>NO. REKENING</td>
            <td>{{ $data->no_rekening }}</td>
        </tr>
        <tr>
            <td>TEMPAT TANGGAL LAHIR</td>
            <td>{{ $data->tempat_lahir }} , {{ $data->tanggal_lahir }}</td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>{{ $data->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td>AGAMA</td>
            <td>{{ $data->agama }}</td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>{{ $data->alamat }}</td>
        </tr>
        <tr>
            <td>TELEPON</td>
            <td>{{ $data->telepon }}</td>
        </tr>
        <tr>
            <td>HANDPHONE</td>
            <td>{{ $data->handphone }}</td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td>{{ $email }}</td>
        </tr>
    </table>
    <br>

    <table border="1" cellspacing="0" cellpadding="5" width="500">
        <tr>
            <th colspan="2">DATA SEKOLAH</th>
        </tr>
        <tr>
            <td>ASAL SEKOLAH</td>
            <td>{{ $data->asal_sekolah }}</td>
        </tr>
        <tr>
            <td>NO. IJAZAH</td>
            <td>{{ $data->no_ijazah }}</td>
        </tr>
        <tr>
            <td>TGL IJAZAH</td>
            <td>{{ $data->tgl_ijazah }}</td>
        </tr>
    </table>
    <br>

    <table border="1" cellspacing="0" cellpadding="5" width="500">
        <tr>
            <th colspan="2">DATA ORANG TUA</th>
        </tr>
        <tr>
            <td>NAMA ORANG TUA / WALI</td>
            <td>{{ $data->nama_ortu }}</td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>{{ $data->alamat_ortu }}</td>
        </tr>
        <tr>
            <td>TELEPON</td>
            <td>{{ $data->telepon_ortu }}</td>
        </tr>
    </table>
    <br>

    @if($data->id == null)
        <a href="/biodata/isi">Isi Biodata</a>
        <br><br>
    @endif
    <a href="/menu">Kembali ke Menu Utama</a>
</body>
</html>
