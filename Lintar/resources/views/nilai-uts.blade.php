<!DOCTYPE html>
<html>
<head>
    <title>Nilai UTS</title>
</head>
<body>
    <h1>Data Nilai UTS</h1>
    
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode M.K</th>
            <th>NAMA M.K</th>
            <th>SKS</th>
            <th>NILAI UTS</th>
        </tr>

        @foreach($data_nilai as $item)
        <tr>
            <td>{{ $loop->iteration }}</td> <td>{{ $item->kode_mk }}</td>
            <td>{{ $item->nama_mk }}</td>
            <td>{{ $item->sks }}</td>
            <td>{{ $item->nilai }}</td>
        </tr>
        @endforeach
    </table>

    <br>
    <a href="/menu">Kembali ke Menu Utama</a>

</body>
</html>