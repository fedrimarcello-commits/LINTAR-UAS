
<!DOCTYPE html>
<html>
<head>
    <title>Kalender Akademik</title>
</head>
<body>

    <h2>KALENDER AKADEMIK</h2>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
        </tr>

        @foreach($kalender as $item)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->keterangan }}</td>
        </tr>

        @endforeach

    </table>

    <br>

    <a href="/menu">Kembali</a>

</body>
</html>

