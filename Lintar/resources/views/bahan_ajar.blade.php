<!DOCTYPE html>
<html>
<head>
    <title>Bahan Ajar</title>
</head>
<body>

    <h2>AKADEMIK - BAHAN AJAR</h2>

    <p>
        Pilih Tahun akademik :
        <select>
            <option>Genap 2025</option>
        </select>
    </p>

    <table border="1">
        <tr>
            <th>#</th>
            <th>No</th>
            <th>Kode</th>
            <th>Mata Kuliah (sks)</th>
            <th>Kls</th>
            <th>Dosen Pengajar</th>
            <th>Ruang / Waktu</th>
            <th>Ket.</th>
            <th>Kode Join Teams</th>
            <th>SAP</th>
            <th>Kontak Email Dosen</th>
        </tr>
        @foreach($jadwal as $index => $item)
        <tr>
        <td><input type="radio" name="pilih_bahan"></td>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->kode_mk }}</td>
            <td>{{ $item->mata_kuliah }} ({{ $item->sks }})</td>
              <td>{{ $item->kelas }}</td>
            <td>
                {{ $item->nidn_dosen }} <br>
            {{ $item->nama_dosen }}
            </td>
            <td>
            {!! nl2br(e($item->ruang_waktu)) !!}
            </td>
            <td>{{ $item->keterangan }}</td>
            <td>
                {{ $item->kode_teams }} <br>
                <a href="#">(Klik Disini)</a>
            </td>
              <td>PDF</td>
            <td>{{ $item->email_dosen }}</td>
        </tr>
        @endforeach

    </table>
    <a href="/menu">Kembali</a>

</body>
</html>
