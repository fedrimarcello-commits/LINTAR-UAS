<!DOCTYPE html>
<html>
<head>
    <title>Kehadiran Kuliah</title>
</head>
<body>

    <h2>Data Kehadiran Kuliah</h2>
    
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>Kelas</th>
            <th>Jumlah Pertemuan</th>
            <th>Jumlah Kehadiran</th>
            <th>Persentase</th>
        </tr>

        @foreach($data_kehadiran as $index => $absen)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $absen->kode_mk }}</td>
            <td>{{ $absen->nama_mk }}</td>
            <td>{{ $absen->kelas }}</td>
            <td>{{ $absen->jumlah_pertemuan }}</td>
            <td>{{ $absen->jumlah_kehadiran }}</td>
            <td>
                @if($absen->jumlah_pertemuan > 0)
                    {{ round(($absen->jumlah_kehadiran / $absen->jumlah_pertemuan) * 100) }}%
                @else
                    0%
                @endif
            </td>
        </tr>
        @endforeach

    </table>

    <br>
    <a href="/menu">Kembali ke Menu Utama</a>

</body>
</html>