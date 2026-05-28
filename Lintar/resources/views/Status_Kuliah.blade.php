<!DOCTYPE html>
<html>
<head>
    <title>Status Kuliah</title>
</head>
<body>
    <h2>Status Kuliah</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Tahun Akademik</th>
            <th>Status</th>
            <th>SKS Ambil</th>
            <th>SKS Peroleh</th>
            <th>IPS</th>
            <th>SKS Ambil Kumulatif</th>
            <th>SKS Peroleh Kumulatif</th>
            <th>IPK</th>
        </tr>

        @foreach($data_status as $status)
        <tr>
            <td>{{ $status->th_akademik }}</td>
            <td>{{ $status->status }}</td>
            <td>{{ $status->sks_ambil }}</td>
            <td>{{ $status->sks_peroleh }}</td>
            <td>{{ $status->ips }}</td>
            <td>{{ $status->sks_ambil_kumulatif }}</td>
            <td>{{ $status->sks_peroleh_kumulatif }}</td>
            <td>{{ $status->ipk }}</td>
        </tr>
        @endforeach

    </table>
    <br>
    <a href="/menu">Kembali ke Menu Utama</a>
</body>
</html>